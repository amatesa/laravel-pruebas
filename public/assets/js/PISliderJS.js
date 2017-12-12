/*-----------------------------------------------------------------------------------*\
 *
 * PISliderJS - Pure JS Slider
 *
 * version: 1.1
 *
 * Author: ZakariaMouhid
 *
 * Profile: https://codecanyon.net/user/zakariamouhid/portfolio?ref=zakariamouhid
 *
\*-----------------------------------------------------------------------------------*/

var PISliderJS = (function () {
    
    "use strict";
    
    /*------------------*\
     * Timing Functions *
    \*------------------*/
    
    function timingFunction(timing) {
        if (typeof timing === "function") {return timing; }
        if (typeof timing !== "string" || typeof timingFunction.functions[timing] !== "function") {timing = "ease"; }
        return timingFunction.functions[timing];
    }
    timingFunction.functions = {
        "ease": function (x) { return 1 - Math.sin((x - 1) * (x - 1) * Math.PI / 2); },
        "ease-in-out": function (x) { return (1 + Math.sin((x - 0.5) * Math.PI)) / 2; },
        "ease-out": function (x) { return Math.cos((x - 1) * Math.PI / 2); },
        "ease-in": function (x) { return 1 - Math.cos(x * Math.PI / 2); },
        "linear": function (x) { return x; },
        "elastic": function (x) {return x === 0 || x === 1 ? x : Math.pow(x - 1, 5) * Math.sin(3 * Math.PI / (2 * x - 2)) + 1; }
    };
    
    /*-------------------------------------------------*\
     * requestAnimationFrame and  cancelAnimationFrame *
    \*-------------------------------------------------*/
    
    var setFrame = window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        function (f) {return setTimeout(f, 16); },
        clearFrame = window.cancelAnimationFrame || window.cancelRequestAnimationFrame ||
        window.webkitCancelAnimationFrame || window.webkitCancelRequestAnimationFrame ||
        window.mozCancelAnimationFrame || window.mozCancelRequestAnimationFrame ||
        window.msCancelAnimationFrame || window.msCancelRequestAnimationFrame ||
        window.oCancelAnimationFrame || window.oCancelRequestAnimationFrame ||
        window.clearTimeout;
    
    /*-----------------------*\
     * Animation Constructor *
    \*-----------------------*/

    function Animation(options) {
        var o, self = this;
        o = {
            from: +options.from,
            to: +options.to,
            timing: timingFunction(options.timing),
            duration: +options.duration || 1,
            autoplay: !!options.autoplay,
            callback: options.callback || function () {},
            callbackEnd: options.callbackEnd || function () {}
        };
        self.play = function () {
            clearFrame(o.frameId);
            var t0 = +new Date();
            o.frameId = setFrame(function update() {
                var t = +new Date(),
                    dt = t - t0;
                if (dt > o.duration) {dt = o.duration; }
                o.callback(o.from + (o.to - o.from) * o.timing(dt / o.duration));
                if (dt < o.duration) {
                    o.frameId = setFrame(update);
                } else {
                    o.callbackEnd();
                }
            });
        };
        self.stop = function () {
            clearFrame(o.frameId);
        };
        if (o.autoplay) {
            self.play();
        }
    }
    
    /*---------------*\
     * Array IndexOf *
    \*---------------*/
    
    function indexOf(arr, item) {
        if (arr.indexOf) {return arr.indexOf(item); }
        var i;
        for (i = 0; i < arr.length; i += 1) {
            if (arr[i] === item) {return i; }
        }
        return -1;
    }
    
    /*---------------*\
     * Array forEach *
    \*---------------*/
    function forEach(arr, callback) {
        var i;
        for (i = 0; i < arr.length; i += 1) {
            callback(arr[i], i, arr);
        }
    }
    
    /*----------------------------------------------*\
     * DOM addEventListener and removeEventListener *
    \*----------------------------------------------*/
    
    function on(elm, e, f) {
        if (elm.addEventListener) {
            elm.addEventListener(e, f);
        } else if (elm.attachEvent) {
            if (elm === window && e !== "load" && e !== "resize") {elm = document; }
            elm.attachEvent("on" + e, f);
        }
    }
    function off(elm, e, f) {
        if (elm.removeEventListener) {
            elm.removeEventListener(e, f);
        } else if (elm.detachEvent) {
            if (elm === window && e !== "load" && e !== "resize") {elm = document; }
            elm.detachEvent("on" + e, f);
        }
    }
    
    /*-------------------------------*\
     * DOM Class List add and remove *
    \*-------------------------------*/
    function addClass(elm, className) {
        if (elm.classList && elm.classList.add) {return elm.classList.add(className); }
        var classList = elm.className.replace(/(^\s+)|(\s+$)/g, "").split(/\s+/),
            i = indexOf(classList, className);
        if (i === -1) {
            classList.push(className);
            elm.className = classList.join(" ");
        }
    }
    function removeClass(elm, className) {
        if (elm.classList && elm.classList.remove) {return elm.classList.remove(className); }
        var classList = elm.className.replace(/(^\s+)|(\s+$)/g, "").split(/\s+/),
            i = indexOf(classList, className);
        if (i > -1) {
            classList.splice(i, 1);
            elm.className = classList.join(" ");
        }
    }
    
    /*----------------------*\
     * PreventDefault Event *
    \*----------------------*/
    
    function preventDefault(e) {
        if (e.preventDefault) {e.preventDefault(); }
        return (e.returnValue = false);
    }
    
    /*---------------------*\
     * Get TouchX of Event *
    \*---------------------*/
    
    function touchX(e) {
        return e.touches && e.touches.length > 0 ? e.touches[0].pageX || 0 : (
            e.changedTouches && e.changedTouches.length > 0 ? e.changedTouches[0].pageX || 0 : 0
        );
    }
    
    /*---------------------------------*\
     * Fix Bug of Modulus Operator (%) *
    \*---------------------------------*/
    
    function mod(a, b) {return ((a % b) + b) % b; }
    
    /*---------------*\
     * Setup Columns *
    \*---------------*/
    
    function setupColumns(options) {
        var columns = [], i, max = 1, value;
        if (typeof options.columns === "object") {
            for (i = 0; i < options.columns.length; i += 1) {
                value = +options.columns[i][1] || 1;
                if (value > max) {max = value; }
                columns.push([+options.columns[i][0] || 0, value]);
            }
        } else {
            columns.push([0, +options.columns || 1]);
        }
        columns.sort(function (a, b) {return a[0] - b[0]; });
        columns.max = max;
        columns.current = -1;
        return columns;
    }
    
    /*-----------*\
     * Setup DOM *
    \*-----------*/
    
    function setupDOM(options, o) {
        var dom = {}, list, item, i, length, count, width;
        dom.target = options.target || document.createElement("div");
        
        dom.ulParent = document.createElement("div");
        dom.ulParent.style.marginLeft = "-" + o.gutter;
        
        dom.ulParentParent = document.createElement("div");
        dom.ulParentParent.style.position = "relative";
        dom.ulParentParent.style.width = "100%";
        dom.ulParentParent.style.overflow = "hidden";
        
        dom.ul = dom.target.children[0] || document.createElement("div");
        dom.ul.style.position = "relative";
        dom.ul.style.overflow = "hidden";
        dom.ul.style.touchAction = "none";
        
        dom.target.replaceChild(dom.ulParentParent, dom.ul);
        dom.ulParentParent.appendChild(dom.ulParent);
        dom.ulParent.appendChild(dom.ul);
        
        dom.buttons = dom.target.children[1] || document.createElement("div");
        dom.buttonLeft = dom.buttons.children[0] || document.createElement("button");
        dom.buttonRight = dom.buttons.children[1] || document.createElement("button");
        
        dom.points = dom.target.children[2] || document.createElement("div");
        dom.pointsItems = [];
        for (i = 0; i < dom.points.children.length; i += 1) {
            dom.pointsItems.push(dom.points.children[i]);
        }
        if (dom.pointsItems.length === 0) {
            dom.pointsItems.push(document.createElement("i"));
        }
        dom.lastPointActive = null;
        
        dom.li = [];
        list = dom.ul.children;
        length = list.length;
        dom.liLength = length;
        count = length + o.columns.max;
        dom.allLiLength = count;
        width = 100 / count + "%";
        for (i = 0; i < length; i += 1) {
            item = list[i];
            item.style.float = "left";
            item.style.minHeight = "1px";
            item.style.boxSizing = item.style.webkitBoxSizing = item.style.mozBoxSizing = "border-box";
            item.style.width = width;
            item.style.paddingLeft = o.gutter;
            dom.li.push(item);
        }
        for (i = 0; i < o.columns.max; i += 1) {
            item = list[i % length].cloneNode(true);
            dom.ul.appendChild(item);
            dom.li.push(item);
        }
        
        function eventClick(e) {
            if (o.isMove) {return preventDefault(e); }
        }
        if (o.drag) {
            list = dom.ul.querySelectorAll("*");
            for (i = 0; i < list.length; i += 1) {
                on(list[i], "click", eventClick);
            }
        }
        
        return dom;
    }
    
    /*--------------------*\
     * Slider Constructor *
    \*--------------------*/
    
    function Slider(options) {
        
        if (!(this instanceof Slider)) {return new Slider(options); }
        
        // this Object
        var self = this, o = {};
        
        // Current Item Nth
        o.currentNth = 0;
        
        // drag Option
        o.drag = !!options.drag;
        
        // timingFunction
        o.timingFunction = options.timingFunction;
        
        // Is Drag Move
        o.isMove = false;
        
        // autoPlay Option
        o.autoPlay = !!options.autoPlay;
        
        // autoPlay Delay
        o.autoPlayDelay = +options.delay || 5000;
        
        // animation Duration
        o.duration = +options.duration || 500;
        
        // Columns
        o.columns = setupColumns(options);
        
        // Gutter
        o.gutter = options.gutter || "0px";
        
        // setupDOM
        o.dom = setupDOM(options, o);
        
        // Update Columns
        o.updateColumns = function () {
            o.dom.ul.style.width = 100 * o.dom.li.length / o.columns.current + "%";
            o.gotToNth(o.currentNth);
            o.autoPlayFunc();
        };
        
        // Update Columns Init
        o.columnsResponsive = function () {
            var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth || 0, i;
            for (i = o.columns.length - 1; i >= 0; i -= 1) {
                if (o.columns[i][0] <= width) {
                    if (o.columns.current !== o.columns[i][1]) {
                        o.columns.current = o.columns[i][1];
                        o.updateColumns();
                    }
                    break;
                }
            }
        };
        
        // Abort Animation
        o.animationAbort = function () {
            if (o.animation) {
                o.animation.stop();
                o.animation = null;
            }
        };
        
        // UL Left (%)
        o.x = 0;
        
        // Set UL Left
        o.setX = function (x) {
            x = mod(x, o.dom.liLength * 100 / o.columns.current);
            x -= o.dom.liLength * 100 / o.columns.current;
            o.x = x;
            o.dom.ul.style.left = x + "%";
            
            var n = mod(Math.round(-x * o.columns.current / 100), o.dom.liLength),
                i = Math.min(Math.floor(n * o.dom.pointsItems.length / (o.dom.liLength - 1)), o.dom.pointsItems.length - 1),
                pointI = o.dom.pointsItems[i];
            if (o.dom.lastPointActive !== pointI) {
                if (o.dom.lastPointActive) {removeClass(o.dom.lastPointActive, "active"); }
                o.dom.lastPointActive = pointI;
                addClass(o.dom.lastPointActive, "active");
            }
        };
        
        // Go to Nth Item
        o.gotToNth = function (n) {
            o.animationAbort();
            o.autoPlayAbort();
            n = mod(n, o.dom.liLength);
            o.setX(-100 * n / o.columns.current);
            o.currentNth = n;
        };
        
        // Go to Nth Item With Animation
        o.goToNthSmooth = function (n) {
            o.animationAbort();
            o.autoPlayAbort();
            n = mod(n, o.dom.liLength);
            
            var from1 = o.x,
                from2 = from1 > -o.dom.liLength * 100 / o.columns.current ? from1 - o.dom.liLength * 100 / o.columns.current : from1,
                from = from1,
                to1 = -100 * n / o.columns.current,
                to2 = to1 > -100 * o.dom.liLength / o.columns.current ? to1 - 100 * o.dom.liLength / o.columns.current : to1,
                to = to1,
                a11 = Math.abs(to1 - from1),
                a12 = Math.abs(to1 - from2),
                a21 = Math.abs(to2 - from1),
                a22 = Math.abs(to2 - from2),
                min = Math.min(a11, a12, a21, a22);
            
            if (min === a11) {to = to1; from = from1; }
            if (min === a12) {to = to1; from = from2; }
            if (min === a21) {to = to2; from = from1; }
            if (min === a22) {to = to2; from = from2; }
            
            o.animation = new Animation({
                from: from,
                to: to,
                duration: o.duration,
                timing: o.timingFunction,
                autoplay: true,
                callback: o.setX,
                callbackEnd: function () {
                    o.animation = null;
                    o.autoPlayFunc();
                }
            });
            o.currentNth = n;
        };
        
        // Buttons Click Event
        on(o.dom.buttonLeft, "click", function () {
            o.goToNthSmooth(o.currentNth - 1);
        });
        on(o.dom.buttonRight, "click", function () {
            o.goToNthSmooth(o.currentNth + 1);
        });
        
        // Points Click Event
        forEach(o.dom.pointsItems, function (point, i, points) {
            on(point, "click", function () {
                o.goToNthSmooth(Math.floor(i * o.dom.liLength / points.length));
            });
        });
        
        // Auto Play
        o.autoPlayFunc = function () {
            if (o.autoPlay) {
                o.autoPlayFunc.id = setTimeout(function () {
                    o.goToNthSmooth(o.currentNth + 1);
                }, o.autoPlayDelay);
            }
        };
        o.autoPlayAbort = function () {
            clearTimeout(o.autoPlayFunc.id);
        };
        
        // Drag Event
        o.eventDown = function (x0) {
            
            o.animationAbort();
            o.autoPlayAbort();
            
            var left = o.x, mouseUp, touchEnd, maxDx = 0;
            
            o.isMove = false;
            
            function eventMove(x) {
                
                var dx = x - x0,
                    px = (100 * o.dom.li.length / o.columns.current) / o.dom.ul.clientWidth;
                
                if (Math.abs(dx) > Math.abs(maxDx)) {maxDx = dx; }
                
                o.setX(left + dx * px);
                
                if (!o.isMove && Math.abs(dx) >= 10) {o.isMove = true; }
                
            }
            
            function mouseMove(e) {
                eventMove(e.pageX || e.clientX || 0, e);
                return preventDefault(e);
            }
            
            function touchMove(e) {
                eventMove(touchX(e), e);
            }
            
            on(window, "mousemove", mouseMove);
            on(window, "touchmove", touchMove);
            
            function eventUp(x, e) {
                off(window, "mousemove", mouseMove);
                off(window, "touchmove", touchMove);
                off(window, "mouseup", mouseUp);
                off(window, "touchend", touchEnd);
                
                
                eventMove(x);
                var dx = x - x0, n = mod(Math.round(-o.x * o.columns.current / 100), o.dom.liLength);
                if (n === o.currentNth && o.isMove) {n += dx < 0 ? 1 : -1; }
                o.goToNthSmooth(n);
                
            }
            
            mouseUp = function (e) {
                eventUp(e.pageX || e.clientX || 0, e);
            };
            
            touchEnd = function (e) {
                eventUp(touchX(e), e);
            };
            
            on(window, "mouseup", mouseUp);
            on(window, "touchend", touchEnd);
            
        };
        if (o.drag) {
            on(o.dom.ul, "mousedown", function (e) {
                o.eventDown(e.pageX || e.clientX || 0, e);
                return preventDefault(e);
            });
            on(o.dom.ul, "touchstart", function (e) {
                o.eventDown(touchX(e), e);
            });
        }
        
        
        // Start
        o.columnsResponsive();
        if (o.columns.length > 1) {
            on(window, "resize", o.columnsResponsive);
            on(window, "load", o.columnsResponsive);
        }
        
        self.o = o;
        
    }
    
    /*----------------------*\
     * Add Plugin To jQuery *
    \*----------------------*/
    
    if (window.jQuery) {
        window.jQuery.fn.PISliderJS = function (options) {
            return this.each(function () {
                options.target = this;
                var slider = new Slider(options);
            });
        };
    }
    
    
    return Slider;
    
}());