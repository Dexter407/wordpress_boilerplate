var kenEvents = Object;
kenEvents.current_width = function () {
    return jQuery(window).width();
}
kenEvents.current_height = function () {
    return Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
}
kenEvents.menu = function () {
    jQuery('.menu-opener').click(function(){     
        jQuery('.main-navbar__list').toggleClass('active');   
        
    })
}
kenEvents.scrollToId = function () {
    jQuery('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                if (jQuery('.header__buttons').hasClass('actived')){
                    jQuery('.header__buttons').removeClass('actived');
                }
                if (jQuery('.header__menu').hasClass('actived')) {
                    jQuery('.header__menu').removeClass('actived');
                }
                jQuery('html, body').animate({
                    scrollTop: target.offset().top - 70
                }, 500);
                return false;
            }
        }
    });
}
kenEvents.backTop = function () {
    jQuery('div#toTop').click(function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 1000);
    })
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('div#toTop').fadeIn();
        } else {
            jQuery('div#toTop').fadeOut();
        }
    });
}

kenEvents.popup = function(){
    jQuery('.kpopup__bg').click(function(){
        jQuery(this).closest('.kpopup').removeClass('animate__animated').removeClass('animate__zoomIn');
    })
    jQuery('.buttonpopup').click(function(){
        var buttonID = jQuery(this).attr('data-id');
        jQuery('#'+buttonID).addClass('animate__animated animate__zoomIn');
    })
    jQuery('.kpopup__buttonclose').click(function(){
        jQuery(this).closest('.kpopup').removeClass('animate__animated animate__zoomIn');
    })
}
kenEvents.gotEffects = function(){
    jQuery('.goteffect').each(function(){
        jQuery(this).addClass('re_eff');
    })
}
kenEvents.menuEffects = function(){
    jQuery('.header__menu__item').hover(function(){
        jQuery(this).addClass('actived');
    },function(){
        jQuery(this).removeClass('actived');
    })
    jQuery('.header__menu__item.sub').hover(function(){
        jQuery(this).find('ul').eq(0).addClass('animate__animated animate__fadeIn');
        kenEvents.current_width();
        var headContainer = jQuery('.header .container').width();
        var leftOff = jQuery(this).offset().left;
        var curWidth = jQuery(this).find('ul').eq(0).outerWidth();
        var haftSubCon = leftOff - ((kenEvents.current_width() - headContainer) / 2);
        var curPoWidth = haftSubCon + curWidth;
        if(curPoWidth > headContainer){
            jQuery(this).addClass('fixright');
        }
    },function(){
        jQuery(this).removeClass('fixright');
        jQuery(this).find('ul').eq(0).removeClass('animate__animated animate__fadeIn');
    })
}

function stringToSlug(string) {
    return string
        .toString()
        .trim()
        .toLowerCase()
        .replace(/\s+/g, "-")
        .replace(/[^\w\-]+/g, "")
        .replace(/\-\-+/g, "-")
        .replace(/^-+/, "")
        .replace(/-+$/, "");
}

function emailVail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function phoneVail(phone) {
    //var re = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
    var re = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    return re.test(phone);
}

//Define Validator Object
var Validator = function(options) {
    //Get the formElement
    var formElement = document.querySelector(options.form);
    var selectorRules = {};
    //Process single inputElement
    function validate(inputElement,rule) {
            var errorElement = inputElement.nextElementSibling;
            var errorMsg ;
            //Value : inputElement.value
            //Test: rule.test            
            var rules =  selectorRules[rule.selector];

            //Loop every rule in single InputElement
            for(var i = 0; i < rules.length; i++) {
                errorMsg = rules[i](inputElement.value);
                if(errorMsg) break;           
            }
            if(errorMsg) {
                errorElement.innerText = errorMsg;
                errorElement.style.display = 'block';
            } else 
            {
                errorElement.style.display = 'none';
            }
        return !errorMsg;
    }

    if(formElement)   {

        //Process on submit form
        formElement.onsubmit = function(e) {
            e.preventDefault();
            var isFormValid = true;
            options.rules.forEach(function (rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement,rule);
                if(!isValid) {
                    isFormValid = false;
                }
                
            });

            if(isFormValid) 
            {
                //In case submit with Javascript API
                if (typeof options.onsubmit === 'function') {
                    var enableInput = formElement.querySelectorAll('[name]')
                    var formValue = Array.from(enableInput).reduce(function (values, input) {
                        values[input.name] = input.name;
                        return values;
                    }, {});
                    options.onsubmit(formValue);
                } 
                //In case submit with default (HTML method)
                else {
                    formElement.submit();
                }

            }
            
        }

        // Process all rules for all inputs in form
        options.rules.forEach(function (rule) {
        var inputElement = formElement.querySelector(rule.selector);
        // Push all of rule into an array (selectorRules)
        if(Array.isArray(selectorRules[rule.selector]))
        {
            selectorRules[rule.selector].push(rule.test)
        } 
        else
        {
            selectorRules[rule.selector] = [rule.test];
        }

        var errorElement = inputElement.nextElementSibling;
        var errorMsg ;

        if(inputElement)
        {
            inputElement.onblur = function () {
                validate(inputElement,rule);          
            }
            
            inputElement.oninput = function () {
            errorElement.style.display = 'none';
            }
        }
        });
    }
};

//Define Validator Rules
//How the rules process
Validator.isRequired = function(selector, message) {
    return {
      selector: selector,
      test: function(value) {
        return value.trim() ? undefined : message || 'This field is required !';
      },
    }
  };
Validator.isEmail = function(selector, message) {
    return {
      selector: selector,
      test: function(value) {
        return emailVail(value) ? undefined : message || 'Please enter the valid email !';
      }
    }
};
Validator.isPhoneNumber = function(selector, message) {
    return {
        selector: selector,
        test: function(value) {
        return phoneVail(value) ? undefined : message || 'Please enter the valid phone number !';
        }
    }
};
Validator.minLengthRequired = function(selector,min , message) {
    return {
        selector: selector,
        test: function(value) {
        return value.length >= min ? undefined : message || 'The minimum character is ' + min;
      }
    }
  };


function stringToObject(str, delimiter) {
    var result = {};
    if (str && str.length > 0) {
        str = str.split(delimiter || ',');
        for (var i = 0; i < str.length; i++) {
            var cur = str[i].split('=');
            result[cur[0]] = cur[1];
        }
    }
    return result;
}

function getParamsUrl(url) {
    var regex = /[?&]([^=#]+)=([^&#]*)/g,
        params = {},
        match;
    while (match = regex.exec(url)) {
        params[match[1]] = match[2];
    }
    return params;
}

function getCookie(name) {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
}

function setCookie(name, value) {
    var today = new Date();
    var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000);
    document.cookie = name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
}

//Implement search future
class Search {
    // 1. describe and create/initiate our object
    constructor() {
        this.addSearchHTML()
        this.resultsDiv = $("#search-overlay__results")
        this.openButton = $(".header__search-language__search")
        this.closeButton = $(".search-overlay__close")
        this.searchOverlay = $(".search-overlay")
        this.searchField = $("#search-term")
        this.events()
        this.isOverlayOpen = false
        this.isSpinnerVisible = false
        this.previousValue
        this.typingTimer
    }

    // 2. events
    events() {
        this.openButton.on("click", this.openOverlay.bind(this))
        this.closeButton.on("click", this.closeOverlay.bind(this))
        $(document).on("keydown", this.keyPressDispatcher.bind(this))
        this.searchField.on("keyup", this.typingLogic.bind(this))
    }
    // 3. methods (function, action...)
    typingLogic() {
        if (this.searchField.val() != this.previousValue) {
          clearTimeout(this.typingTimer)
    
          if (this.searchField.val()) {
            if (!this.isSpinnerVisible) {
              this.resultsDiv.html('<div class="spinner-loader"></div>')
              this.isSpinnerVisible = true
            }
            this.typingTimer = setTimeout(this.getResults.bind(this), 750)
          } else {
            this.resultsDiv.html("")
            this.isSpinnerVisible = false
          }
        }
    
        this.previousValue = this.searchField.val()
    }

    getResults() {
        $.getJSON(universityData.root_url + "/wp-json/lavo/v1/search?term=" + this.searchField.val(), results => {
            this.resultsDiv.html(`

            <div class="search-overplay-results">
            <div class="general-info">
                <h2 class="general-info__section-title">General Information</h2>
                ${results.generalInfo.length ? '<ul class="general-info__result-list">' : "<p>No general information matches that search.</p>"}
                ${results.generalInfo.map(item => `<li class="general-info__result-item"><a href="${item.permalink}" class="general-info__result-link">${item.title}</a></li>`).join("")}         
                ${results.generalInfo.length ? "</ul>" : ""}
            </div>

            <div class="lavo-products">
                <h2 class="lavo-products__section-title">Lavo products</h2>
                ${results.products.length ? '<ul class="lavo-products__result-list">' : `<p>No products match that search. <a href="${universityData.root_url}/products">View all products</a></p>`}
                ${results.products.map(item => `<li class="lavo-products__result-item"><a href="${item.permalink}" class="lavo-products__result-link"><div class="lavo-products__result-img-wrapper"><img src="${item.product_img}" alt="${item.title}" class="lavo-products__result-img"></div><h3 class="lavo-products__result-title">${item.title}</h3></a></li>`).join("")}                    
                ${results.products.length ? "</ul>" : ""}
            </div>

            </div>

          `)
          this.isSpinnerVisible = false
        })
      }      

    keyPressDispatcher(e) {
        if (e.keyCode == 83 && !this.isOverlayOpen && !$("input, textarea").is(":focus")) {
            this.openOverlay()
        }

        if (e.keyCode == 27 && this.isOverlayOpen) {
            this.closeOverlay()
        }
    }

    openOverlay() {
        this.searchOverlay.addClass("search-overlay--active")
        $("body").addClass("body-no-scroll")
        this.searchField.val("")
        setTimeout(() => this.searchField.focus(), 301)
        console.log("our open method just ran!")
        this.isOverlayOpen = true
    }

    closeOverlay() {
        this.searchOverlay.removeClass("search-overlay--active")
        $("body").removeClass("body-no-scroll")
        console.log("our close method just ran!")
        this.isOverlayOpen = false
    }

    addSearchHTML() {
        $("body").append(`
          <div class="search-overlay">
            <div class="search-overlay__top">
              <div class="container">
                <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
                <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
                <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
              </div>
            </div>
            
            <div class="container">
              <div id="search-overlay__results"></div>
            </div>
    
          </div>
        `)
      }
}

// const magicalSearch = new Search();

jQuery(document).ready(function(){
    kenEvents.backTop();
    kenEvents.menu();
    kenEvents.scrollToId();
    kenEvents.gotEffects();
    kenEvents.menuEffects();
    kenEvents.popup();

    $('#main-banner__carousel').owlCarousel({
        items:1,
        lazyLoad: true,
        nav:true,
        // center:true,
        // autoWidth:true,
        loop: true,
        mouseDrag: true,
        dots:true,
    });

    $('#product-list__carousel').owlCarousel({
        lazyLoad: true,
        nav:true,
        // center:true,
        // autoWidth:true,
        loop: true,
        mouseDrag: true,
        dots:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,                
            },
            767:{
                items:3,                
            },
            980:{
                items:4,                
            },
            1199:{
                items:5,                
            }
        }
    });

    $('#flash-sale__product-list').owlCarousel({
        lazyLoad: true,
        nav:true,        
        loop: true,
        mouseDrag: true,
        dots:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,                
            },
            767:{
                items:1,                
            },
            980:{
                items:2,                
            },
            1199:{
                items:3,                
            }
        }
    });

    $('#best-seller__product-list').owlCarousel({
        lazyLoad: true,
        nav:true,        
        loop: true,
        mouseDrag: true,
        dots:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,                
            },
            767:{
                items:1,                
            },
            980:{
                items:2,                
            },
            1199:{
                items:3,                
            }
        }
    });

    $('#promotion__product-list').owlCarousel({
        items:5,
        autoWidth:true,
        center:true,
        lazyLoad: true,
        nav:false,
        // margin:0,
        loop: true,
        mouseDrag: true,
        dots:false,
    });

    $('#must-watch__product-list').owlCarousel({
        items:5,
        autoWidth:true,
        center:true,
        lazyLoad: true,
        nav:false,
        // margin:0,
        loop: true,
        mouseDrag: true,
        dots:false,
    });

    
    
    Validator({
        form: '.contact-us__contact-form',
        // onsubmit: function(data) {
        //     console.log(data);
        // },
        rules: [
            Validator.isRequired('.contact-us__contact-form__name'),
            Validator.isRequired('.contact-us__contact-form__email'),
            Validator.isEmail('.contact-us__contact-form__email'),
            Validator.isRequired('.contact-us__contact-form__phone'),
            Validator.isPhoneNumber('.contact-us__contact-form__phone'),
            Validator.isRequired('.contact-us__contact-form__msg' ),
            Validator.minLengthRequired('.contact-us__contact-form__msg', 6),            
        ]
    });

    Validator({
        form: '.contact-form',        
        rules: [
            Validator.isRequired('.contact-form__name'),
            Validator.isRequired('.contact-form__email'),
            Validator.isEmail('.contact-form__email'),
            Validator.isRequired('.contact-form__msg' ),
            Validator.minLengthRequired('.contact-form__msg', 6),            
        ]
    });

    var Jquery_Exam = jQuery('.Jquery-Exam');
    Jquery_Exam.add($('.Jquery-Exam__2nd').css('outline','red')).css('background-color', 'blue');

})
jQuery(function () {
    function logElementEvent(eventName, element) {
      //console.log(Date.now(), eventName, element.getAttribute("data-src"));
    }

    var callback_enter = function (element) {
      logElementEvent("🔑 ENTERED", element);
    };
    var callback_exit = function (element) {
      logElementEvent("🚪 EXITED", element);
    };
    var callback_loading = function (element) {
      logElementEvent("⌚ LOADING", element);
    };
    var callback_loaded = function (element) {
      logElementEvent("👍 LOADED", element);
    };
    var callback_error = function (element) {
      logElementEvent("💀 ERROR", element);
      element.src =
        "https://via.placeholder.com/440x560/?text=Error+Placeholder";
    };
    var callback_finish = function () {
      logElementEvent("✔️ FINISHED", document.documentElement);
    };
    var callback_cancel = function (element) {
      logElementEvent("🔥 CANCEL", element);
    };

    // var ll = new LazyLoad({
    //   threshold: 0,
    //   // Assign the callbacks defined above
    //   callback_enter: callback_enter,
    //   callback_exit: callback_exit,
    //   callback_cancel: callback_cancel,
    //   callback_loading: callback_loading,
    //   callback_loaded: callback_loaded,
    //   callback_error: callback_error,
    //   callback_finish: callback_finish
    // });
});