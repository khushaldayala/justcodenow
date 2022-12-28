!function(){"use strict";var e=function(e){return("undefined"!=typeof wcpay_config?wcpay_config:wc.wcSettings.getSetting("woocommerce_payments_data"))[e]||null};function t(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function n(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function o(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function i(e,t,n){return t&&o(e.prototype,t),n&&o(e,n),e}function a(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function c(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?a(Object(r),!0).forEach((function(t){n(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):a(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var s=function(){function n(e,t){r(this,n),this.options=e,this.stripe=null,this.stripePlatform=null,this.request=t}return i(n,[{key:"getStripe",value:function(){var e=arguments.length>0&&void 0!==arguments[0]&&arguments[0],t=this.options,n=t.publishableKey,r=t.accountId,o=t.forceNetworkSavedCards;return o&&!e?(this.stripePlatform||(this.stripePlatform=new Stripe(n)),this.stripePlatform):(this.stripe||(this.stripe=new Stripe(n,{stripeAccount:r})),this.stripe)}},{key:"generatePaymentMethodRequest",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n=this.getStripe();return new(function(){function o(){r(this,o),this.args=c(c({},e),{},{billing_details:{address:{}}})}return i(o,[{key:"prepareValue",value:function(e,n){if(void 0!==n&&0!==n.length||(n=t[e]),void 0!==n&&0<n.length)return n}},{key:"setBillingDetail",value:function(e,t){var n=this.prepareValue(e,t);void 0!==n&&(this.args.billing_details[e]=n)}},{key:"setAddressDetail",value:function(e,t){var n=this.prepareValue(e,t);void 0!==n&&(this.args.billing_details.address[e]=n)}},{key:"send",value:function(){return n.createPaymentMethod(this.args).then((function(e){if(e.error)throw e.error;return e}))}}]),o}())}},{key:"confirmIntent",value:function(n,r){var o=this,i=n.match(/#wcpay-confirm-(pi|si):(.+):(.+):(.+)$/);if(!i)return!0;var a="si"===i[1],c=i[2],s=i[3],u=i[4],d=n.indexOf("order-pay"),l=-1<d,m=l&&n.substring(d).match(/\d+/);return m&&(c=m[0]),{request:(a?this.getStripe().confirmCardSetup(s):this.getStripe(!0).confirmCardPayment(s)).then((function(t){var n=t.paymentIntent&&t.paymentIntent.id||t.setupIntent&&t.setupIntent.id||t.error&&t.error.payment_intent&&t.error.payment_intent.id||t.error.setup_intent&&t.error.setup_intent.id;return[o.request(e("ajaxUrl"),{action:"update_order_status",order_id:c,_ajax_nonce:u,intent_id:n,payment_method_id:r||null}),t.error]})).then((function(e){var n,r,o=(r=2,function(e){if(Array.isArray(e))return e}(n=e)||function(e,t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e)){var n=[],r=!0,o=!1,i=void 0;try{for(var a,c=e[Symbol.iterator]();!(r=(a=c.next()).done)&&(n.push(a.value),!t||n.length!==t);r=!0);}catch(e){o=!0,i=e}finally{try{r||null==c.return||c.return()}finally{if(o)throw i}}return n}}(n,r)||function(e,n){if(e){if("string"==typeof e)return t(e,n);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?t(e,n):void 0}}(n,r)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()),i=o[0],a=o[1];if(a)throw a;return i.then((function(e){var t=JSON.parse(e);if(t.error)throw t.error;return t.return_url}))})),isOrderPage:l}}},{key:"setupIntent",value:function(t){var n=this;return this.request(e("ajaxUrl"),{action:"create_setup_intent","wcpay-payment-method":t,_ajax_nonce:e("createSetupIntentNonce")}).then((function(e){if(!e.success)throw e.data.error;return"succeeded"===e.data.status?e.data:n.getStripe().confirmCardSetup(e.data.client_secret).then((function(e){var t=e.setupIntent,n=e.error;if(n)throw n;return t}))}))}}]),n}(),u="https://cdn.sift.com/s.js",d="https://js.stripe.com/v3",l={forter:function(e){var t=e.site_id;if(!document.querySelector('script[id="'+t+'"]')){var n=document.createElement("script");n.id=t,n.textContent="(function () {var eu = 'g68x4yj4t5;e6z1forxgiurqw1qhw2vq2(VQ(2vfulsw1mv';var siteId = \""+t+'";function t(t,e){for(var n=t.split(""),r=0;r<n.length;++r)n[r]=String.fromCharCode(n[r].charCodeAt(0)+e);return n.join("")}function e(e){return t(e,-v).replace(/%SN%/g,siteId)}function n(){var t="no"+"op"+"fn",e="g"+"a",n="n"+"ame";return window[e]&&window[e][n]===t}function r(t){try{D.ex=t,n()&&D.ex.indexOf(S.uB)===-1&&(D.ex+=S.uB),y(D)}catch(e){}}function o(t,e,n,r){function o(e){try{e.blockedURI===t&&(r(!0),i=!0,document.removeEventListener("securitypolicyviolation",o))}catch(n){document.removeEventListener("securitypolicyviolation",o)}}var i=!1;t="https://"+t,document.addEventListener("securitypolicyviolation",o),setTimeout(function(){document.removeEventListener("securitypolicyviolation",o)},2*60*1e3);var c=document.createElement("script");c.onerror=function(){if(!i)try{r(!1),i=!0}catch(t){}},c.onload=n,c.type="text/javascript",c.id="ftr__script",c.async=!0,c.src=t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(c,a)}function i(){I(S.uAL),setTimeout(c,w,S.uAL)}function c(t){try{var e=t===S.uDF?h:p,n=function(){try{b(),r(t+S.uS)}catch(e){}},c=function(e){try{b(),D.td=1*new Date-D.ts,r(e?t+S.uF+S.cP:t+S.uF),t===S.uDF&&i()}catch(n){r(S.eUoe)}};o(e,void 0,n,c)}catch(a){r(t+S.eTlu)}}var a={write:function(t,e,n,r){void 0===r&&(r=!0);var o,i;if(n?(o=new Date,o.setTime(o.getTime()+24*n*60*60*1e3),i="; expires="+o.toGMTString()):i="",!r)return void(document.cookie=escape(t)+"="+escape(e)+i+"; path=/");var c,a,u;if(u=location.host,1===u.split(".").length)document.cookie=escape(t)+"="+escape(e)+i+"; path=/";else{a=u.split("."),a.shift(),c="."+a.join("."),document.cookie=escape(t)+"="+escape(e)+i+"; path=/; domain="+c;var d=this.read(t);null!=d&&d==e||(c="."+u,document.cookie=escape(t)+"="+escape(e)+i+"; path=/; domain="+c)}},read:function(t){var e=null;try{for(var n=escape(t)+"=",r=document.cookie.split(";"),o=0;o<r.length;o++){for(var i=r[o];" "==i.charAt(0);)i=i.substring(1,i.length);0===i.indexOf(n)&&(e=unescape(i.substring(n.length,i.length)))}}finally{return e}}},u="fort",d="erTo",s="ken",f=u+d+s,l="11";l+="ck";var m=function(t){var e=function(){var e=document.createElement("link");return e.setAttribute("rel","pre"+"con"+"nect"),e.setAttribute("cros"+"sori"+"gin","anonymous"),e.onload=function(){document.head.removeChild(e)},e.onerror=function(t){document.head.removeChild(e)},e.setAttribute("href",t),document.head.appendChild(e),e};if(document.head){var n=e();setTimeout(function(){document.head.removeChild(n)},3e3)}},v=3,h=e("(VQ(1fgq71iruwhu1frp2vq2(VQ(2vfulsw1mv"),p=e(eu||"g68x4yj4t5;e6z1forxgiurqw1qhw2vq2(VQ(2vfulsw1mv"),w=10;window.ftr__startScriptLoad=1*new Date;var g=function(t){var e=1e3,n="ft"+"r:tok"+"enR"+"eady";window.ftr__tt&&clearTimeout(window.ftr__tt),window.ftr__tt=setTimeout(function(){try{delete window.ftr__tt,t+="_tt";var e=document.createEvent("Event");e.initEvent(n,!1,!1),e.detail=t,document.dispatchEvent(e)}catch(r){}},e)},y=function(t){var e=function(t){return t||""},n=e(t.id)+"_"+e(t.ts)+"_"+e(t.td)+"_"+e(t.ex)+"_"+e(l);a.write(f,n,1825,!0),g(n)},T=function(){var t=a.read(f)||"",e=t.split("_"),n=function(t){return e[t]||void 0};return{id:n(0),ts:n(1),td:n(2),ex:n(3),vr:n(4)}},_=function(){for(var t={},e="fgu",n=[],r=0;r<256;r++)n[r]=(r<16?"0":"")+r.toString(16);var o=function(t,e,r,o,i){var c=i?"-":"";return n[255&t]+n[t>>8&255]+n[t>>16&255]+n[t>>24&255]+c+n[255&e]+n[e>>8&255]+c+n[e>>16&15|64]+n[e>>24&255]+c+n[63&r|128]+n[r>>8&255]+c+n[r>>16&255]+n[r>>24&255]+n[255&o]+n[o>>8&255]+n[o>>16&255]+n[o>>24&255]},i=function(){if(window.Uint32Array&&window.crypto&&window.crypto.getRandomValues){var t=new window.Uint32Array(4);return window.crypto.getRandomValues(t),{d0:t[0],d1:t[1],d2:t[2],d3:t[3]}}return{d0:4294967296*Math.random()>>>0,d1:4294967296*Math.random()>>>0,d2:4294967296*Math.random()>>>0,d3:4294967296*Math.random()>>>0}},c=function(){var t="",e=function(t,e){for(var n="",r=t;r>0;--r)n+=e.charAt(1e3*Math.random()%e.length);return n};return t+=e(2,"0123456789"),t+=e(1,"123456789"),t+=e(8,"0123456789")};return t.safeGenerateNoDash=function(){try{var t=i();return o(t.d0,t.d1,t.d2,t.d3,!1)}catch(n){try{return e+c()}catch(n){}}},t.isValidNumericalToken=function(t){return t&&t.toString().length<=11&&t.length>=9&&parseInt(t,10).toString().length<=11&&parseInt(t,10).toString().length>=9},t.isValidUUIDToken=function(t){return t&&32===t.toString().length&&/^[a-z0-9]+$/.test(t)},t.isValidFGUToken=function(t){return 0==t.indexOf(e)&&t.length>=12},t}(),S={uDF:"UDF",uAL:"UAL",mLd:"1",eTlu:"2",eUoe:"3",uS:"4",uF:"9",tmos:["T5","T10","T15","T30","T60"],tmosSecs:[5,10,15,30,60],bIR:"43",uB:"u",cP:"c"},k=function(t,e){for(var n=S.tmos,r=0;r<n.length;r++)if(t+n[r]===e)return!0;return!1};try{var D=T();try{D.id&&(_.isValidNumericalToken(D.id)||_.isValidUUIDToken(D.id)||_.isValidFGUToken(D.id))?window.ftr__ncd=!1:(D.id=_.safeGenerateNoDash(),window.ftr__ncd=!0),D.ts=window.ftr__startScriptLoad,y(D);for(var x="for"+"ter"+".co"+"m",A="ht"+"tps://c"+"dn9."+x,U="ht"+"tps://"+D.id+"-"+siteId+".cd"+"n."+x,F="http"+"s://cd"+"n3."+x,L=[A,U,F],E=0;E<L.length;E++)m(L[E]);var V=new Array(S.tmosSecs.length),I=function(t){for(var e=0;e<S.tmosSecs.length;e++)V[e]=setTimeout(r,1e3*S.tmosSecs[e],t+S.tmos[e])},b=function(){for(var t=0;t<S.tmosSecs.length;t++)clearTimeout(V[t])};k(S.uDF,D.ex)?i():(I(S.uDF),setTimeout(c,w,S.uDF))}catch(C){r(S.mLd)}}catch(C){}})()',document.body.appendChild(n)}},sift:function(e){var t=e.beacon_key,n=e.session_id,r=e.user_id,o=window._sift=window._sift||[];if(o.push(["_setAccount",t]),o.push(["_setUserId",r]),o.push(["_setSessionId",n]),o.push(["_trackPageview"]),!document.querySelector('[src="'.concat(u,'"]'))){var i=document.createElement("script");i.src=u,i.async=!0,document.body.appendChild(i)}},stripe:function(){if(!document.querySelector('[src^="'.concat(d,'"]'))){var e=document.createElement("script");e.src=d,e.async=!0,document.body.appendChild(e)}}};jQuery((function(t){!function(e){for(var t in e){var n=l[t];n&&e[t]&&n(e[t])}}(e("fraudServices"));var n=e("publishableKey");if(n){var r=new s({publishableKey:n,accountId:e("accountId"),forceNetworkSavedCards:e("forceNetworkSavedCards")},(function(e,t){return new Promise((function(n,r){jQuery.post(e,t).then(n).fail(r)}))})),o=r.getStripe().elements(),i={},a=o.create("card",{hidePostalCode:!0,classes:{base:"wcpay-card-mounted"}}),c={type:"card",card:a},u=o.create("iban",{supportedCountries:["SEPA"],classes:{base:"wcpay-sepa-mounted"}}),d={type:"sepa_debit",sepa_debit:u},m=function(){return t("#payment_method_woocommerce_payments_sepa").is(":checked")};t(document.body).on("updated_checkout",(function(){t("#wcpay-card-element").length&&!t("#wcpay-card-element").children().length&&(a.unmount(),a.mount("#wcpay-card-element"),t("#wcpay-sepa-element").length&&u.mount("#wcpay-sepa-element"))})),(t("form#add_payment_method").length||t("form#order_review").length)&&(a.mount("#wcpay-card-element"),t("#wcpay-sepa-element").length&&u.mount("#wcpay-sepa-element")),a.addEventListener("change",(function(e){var n=t("#wcpay-errors");e.error?n.html('<ul class="woocommerce-error"><li /></ul>').find("li").text(e.error.message):n.empty()})),u.addEventListener("change",(function(e){var n=t("#wcpay-sepa-errors");e.error?n.html('<ul class="woocommerce-error"><li /></ul>').find("li").text(e.error.message):n.empty()}));var p,f=function(e){e.addClass("processing").block({message:null,overlayCSS:{background:"#fff",opacity:.6}})},h=function(e){var n='<ul class="woocommerce-error" role="alert">'+e+"</ul>",r=t(".woocommerce-notices-wrapper, form.checkout").first();if(r.length){t(".woocommerce-NoticeGroup-checkout, .woocommerce-error, .woocommerce-message").remove(),r.prepend('<div class="woocommerce-NoticeGroup woocommerce-NoticeGroup-checkout">'+n+"</div>"),r.find(".input-text, select, input:checkbox").trigger("validate").blur();var o=t(".woocommerce-NoticeGroup-checkout");o.length||(o=r),t.scroll_to_notices(o),t(document.body).trigger("checkout_error")}},v=function(e,n){r.setupIntent(n.id).then((function(n){e.append(t('<input type="hidden" />').attr("id","wcpay-setup-intent").attr("name","wcpay-setup-intent").val(n.id));var r=t.blockUI.defaults.ignoreIfBlocked;t.blockUI.defaults.ignoreIfBlocked=!0,e.removeClass("processing").submit(),t.blockUI.defaults.ignoreIfBlocked=r})).catch((function(t){p=null,e.removeClass("processing").unblock(),h(t.message)}))},y=function(e,n){var r=n.id,o=m()?"#wcpay-payment-method-sepa":"#wcpay-payment-method";t(o).val(r),e.removeClass("processing").submit()},w=function(e,n,o,a){if(!p){f(e);var c=r.generatePaymentMethodRequest(a,i);return o&&(c.setBillingDetail("name",(t("#billing_first_name").val()+" "+t("#billing_last_name").val()).trim()),c.setBillingDetail("email",t("#billing_email").val()),c.setBillingDetail("phone",t("#billing_phone").val()),c.setAddressDetail("city",t("#billing_city").val()),c.setAddressDetail("country",t("#billing_country").val()),c.setAddressDetail("line1",t("#billing_address_1").val()),c.setAddressDetail("line2",t("#billing_address_2").val()),c.setAddressDetail("postal_code",t("#billing_postcode").val()),c.setAddressDetail("state",t("#billing_state").val())),c.send().then((function(t){var r=t.paymentMethod;p=!0,n(e,r)})).catch((function(t){e.removeClass("processing").unblock(),h(t.message)})),!1}p=null},g=function(){var n=m()?t("#wcpay-payment-method-sepa").val():t("#wcpay-payment-method").val(),o=t("#wc-woocommerce_payments-new-payment-method").is(":checked"),i=r.confirmIntent(window.location.href,o?n:null);if(!0!==i){var a=i.request;i.isOrderPage&&(f(t("#order_review")),t("#payment").hide(500)),history.replaceState("",document.title,window.location.pathname+window.location.search),a.then((function(e){window.location=e})).catch((function(n){t("form.checkout").removeClass("processing").unblock(),t("#order_review").removeClass("processing").unblock(),t("#payment").show(500);var r=n.message;n instanceof Error&&(r=e("genericErrorMessage")),h(r)}))}};t("form.checkout").on("checkout_place_order_woocommerce_payments checkout_place_order_woocommerce_payments_sepa",(function(){if(!_())return w(t(this),y,!0,m()?d:c)})),t("#order_review").on("submit",(function(){if(!_()&&(t("#payment_method_woocommerce_payments").is(":checked")||m()))return w(t("#order_review"),y,!0,m()?d:c)})),t("form#add_payment_method").on("submit",(function(){if(!t("#wcpay-setup-intent").val())return w(t("form#add_payment_method"),v,!1,m()?d:c)})),g(),window.addEventListener("hashchange",(function(){window.location.hash.startsWith("#wcpay-confirm-")&&g()}))}function _(){return m()?t("#wc-woocommerce_payments-payment-sepa-token-new").length&&!t("#wc-woocommerce_payments-payment-sepa-token-new").is(":checked"):t("#wc-woocommerce_payments-payment-token-new").length&&!t("#wc-woocommerce_payments-payment-token-new").is(":checked")}}))}();