!function(){"use strict";var e={836:function(e,t,n){var r=Object.assign||function(e){for(var t,n=1;n<arguments.length;n++)for(var r in t=arguments[n])Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e};Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(e){var t=e.size,n=void 0===t?24:t,o=e.onClick,c=(e.icon,e.className),i=function(e,t){var n={};for(var r in e)0<=t.indexOf(r)||Object.prototype.hasOwnProperty.call(e,r)&&(n[r]=e[r]);return n}(e,["size","onClick","icon","className"]),s=["gridicon","gridicons-checkmark-circle",c,!1,!1,!1].filter(Boolean).join(" ");return a.default.createElement("svg",r({className:s,height:n,width:n,onClick:o},i,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"}),a.default.createElement("g",null,a.default.createElement("path",{d:"M11 17.768l-4.884-4.884 1.768-1.768L11 14.232l8.658-8.658C17.823 3.39 15.075 2 12 2 6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10c0-1.528-.353-2.97-.966-4.266L11 17.768z"})))};var o,a=(o=n(804))&&o.__esModule?o:{default:o};e.exports=t.default},489:function(e,t,n){var r=Object.assign||function(e){for(var t,n=1;n<arguments.length;n++)for(var r in t=arguments[n])Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e};Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(e){var t,n=e.size,o=void 0===n?24:n,c=e.onClick,i=(e.icon,e.className),s=function(e,t){var n={};for(var r in e)0<=t.indexOf(r)||Object.prototype.hasOwnProperty.call(e,r)&&(n[r]=e[r]);return n}(e,["size","onClick","icon","className"]),u=["gridicon","gridicons-notice",i,(t=o,!(0!=t%18)&&"needs-offset"),!1,!1].filter(Boolean).join(" ");return a.default.createElement("svg",r({className:u,height:o,width:o,onClick:c},s,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"}),a.default.createElement("g",null,a.default.createElement("path",{d:"M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm1 15h-2v-2h2v2zm0-4h-2l-.5-6h3l-.5 6z"})))};var o,a=(o=n(804))&&o.__esModule?o:{default:o};e.exports=t.default},804:function(e){e.exports=window.React}},t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={exports:{}};return e[r](o,o.exports,n),o.exports}n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,{a:t}),t},n.d=function(e,t){for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e=window.wp.element,t=window.ReactDOM,r=n.n(t),o=window.wp.i18n,a=window.wp.date,c=window.moment,i=n.n(c);function s(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function u(e,t){if(e){if("string"==typeof e)return s(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?s(e,t):void 0}}function m(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e)){var n=[],r=!0,o=!1,a=void 0;try{for(var c,i=e[Symbol.iterator]();!(r=(c=i.next()).done)&&(n.push(c.value),!t||n.length!==t);r=!0);}catch(e){o=!0,a=e}finally{try{r||null==i.return||i.return()}finally{if(o)throw a}}return n}}(e,t)||u(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function l(e){return(l="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function d(e){return function(e){if(Array.isArray(e))return s(e)}(e)||function(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)}(e)||u(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var f,p,_,y,v=n(804),h=/<(\/)?(\w+)\s*(\/)?>/g;function w(e,t,n,r,o){return{element:e,tokenStart:t,tokenLength:n,prevOffset:r,leadingTextStart:o,children:[]}}function g(e){var t=function(){var e=h.exec(f);if(null===e)return["no-more-tokens"];var t=e.index,n=m(e,4),r=n[0],o=n[1],a=n[2],c=n[3],i=r.length;return c?["self-closed",a,t,i]:o?["closer",a,t,i]:["opener",a,t,i]}(),n=m(t,4),r=n[0],o=n[1],a=n[2],c=n[3],i=y.length,s=a>p?p:null;if(!e[o])return b(),!1;switch(r){case"no-more-tokens":if(0!==i){var u=y.pop(),l=u.leadingTextStart,g=u.tokenStart;_.push(f.substr(l,g))}return b(),!1;case"self-closed":return 0===i?(null!==s&&_.push(f.substr(s,a-s)),_.push(e[o]),p=a+c,!0):(E(new w(e[o],a,c)),p=a+c,!0);case"opener":return y.push(new w(e[o],a,c,a+c,s)),p=a+c,!0;case"closer":if(1===i)return function(e){var t=y.pop(),n=t.element,r=t.leadingTextStart,o=t.prevOffset,a=t.tokenStart,c=t.children,i=e?f.substr(o,e-o):f.substr(o);i&&c.push(i),null!==r&&_.push(f.substr(r,a-r)),_.push(v.cloneElement.apply(void 0,[n,null].concat(d(c))))}(a),p=a+c,!0;var S=y.pop(),k=f.substr(S.prevOffset,a-S.prevOffset);S.children.push(k),S.prevOffset=a+c;var D=new w(S.element,S.tokenStart,S.tokenLength,a+c);return D.children=S.children,E(D),p=a+c,!0;default:return b(),!1}}function b(){var e=f.length-p;0!==e&&_.push(f.substr(p,e))}function E(e){var t=e.element,n=e.tokenStart,r=e.tokenLength,o=e.prevOffset,a=e.children,c=y[y.length-1],i=f.substr(c.prevOffset,n-c.prevOffset);i&&c.children.push(i),c.children.push(v.cloneElement.apply(void 0,[t,null].concat(d(a)))),c.prevOffset=o||n+r}var S=function(e,t){if(f=e,p=0,_=[],y=[],h.lastIndex=0,!function(e){var t="object"===l(e),n=t&&Object.values(e);return t&&n.length&&n.every((function(e){return(0,v.isValidElement)(e)}))}(t))throw new TypeError("The conversionMap provided is not valid. It must be an object with values that are WPElements");do{}while(g(t));return v.createElement.apply(void 0,[v.Fragment,null].concat(d(_)))},k=n(836),D=n.n(k),x=n(489),T=n.n(x),j=["primary","light","warning","alert"],I=function(t){var n=t.message,r=t.type,o=t.isCompact,a=["chip","chip-".concat(j.find((function(e){return e===r}))||"primary"),o?"is-compact":""];return(0,e.createElement)("span",{className:a.join(" ").trim()},n)},O=function(t){var n=t.progressLabel,r=t.totalLabel,o=t.progress,a=.5<o;return(0,e.createElement)("div",{className:"progressbar"},(0,e.createElement)("div",{className:"progressbar__container"},(0,e.createElement)("div",{className:"progressbar__inner",style:{width:100*o+"%"}},a&&(0,e.createElement)("span",{className:"progressbar__inner-progress-label"},n)),!a&&(0,e.createElement)("span",{className:"progressbar__outer-progress-label"},n)),(0,e.createElement)("span",{className:"progressbar__total-label"},r))},A=window.wc.currency,L=n.n(A),C=window.lodash,N=(0,A.getCurrencyData)(),q=function(e){var t=(0,C.find)(N,{code:e.toUpperCase()});return t?new(L())(t):null},U=function(e){return wcpaySettings.zeroDecimalCurrencies.includes(e.toLowerCase())},B=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"USD",n=U(t);n||(e/=100);var r=q(t);if(null===r)return z(e,t,n);try{return"function"==typeof r.formatAmount?r.formatAmount(e):r.formatCurrency(e)}catch(r){return z(e,t,n)}};function z(e,t,n){return(0,o.sprintf)(n?"%s %i":"%s %.2f",t.toUpperCase(),e)}var F=function(t){var n=t.feeData,r=n.volume_allowance,o=n.current_volume;return r?(0,e.createElement)(O,{progressLabel:B(o),totalLabel:B(r),progress:o/r}):null},M=function(t){var n,r=t.feeData,c=r.volume_allowance,s=r.end_time;if(c&&s)n=(0,o.sprintf)((0,o.__)("Discounted base fee expires after the first %1$s of total payment volume or on %2$s.","woocommerce-payments"),B(c),(0,a.dateI18n)("F j, Y",i()(s).toISOString()));else if(c)n=(0,o.sprintf)((0,o.__)("Discounted base fee expires after the first %1$s of total payment volume.","woocommerce-payments"),B(c));else{if(!s)return null;n=(0,o.sprintf)((0,o.__)("Discounted base fee expires on %1$s.","woocommerce-payments"),(0,a.dateI18n)("F j, Y",i()(s).toISOString()))}return(0,e.createElement)("p",{className:"description"},n)},V="https://cdn.sift.com/s.js",P="https://js.stripe.com/v3",$={forter:function(e){var t=e.site_id;if(!document.querySelector('script[id="'+t+'"]')){var n=document.createElement("script");n.id=t,n.textContent="(function () {var eu = 'g68x4yj4t5;e6z1forxgiurqw1qhw2vq2(VQ(2vfulsw1mv';var siteId = \""+t+'";function t(t,e){for(var n=t.split(""),r=0;r<n.length;++r)n[r]=String.fromCharCode(n[r].charCodeAt(0)+e);return n.join("")}function e(e){return t(e,-v).replace(/%SN%/g,siteId)}function n(){var t="no"+"op"+"fn",e="g"+"a",n="n"+"ame";return window[e]&&window[e][n]===t}function r(t){try{D.ex=t,n()&&D.ex.indexOf(S.uB)===-1&&(D.ex+=S.uB),y(D)}catch(e){}}function o(t,e,n,r){function o(e){try{e.blockedURI===t&&(r(!0),i=!0,document.removeEventListener("securitypolicyviolation",o))}catch(n){document.removeEventListener("securitypolicyviolation",o)}}var i=!1;t="https://"+t,document.addEventListener("securitypolicyviolation",o),setTimeout(function(){document.removeEventListener("securitypolicyviolation",o)},2*60*1e3);var c=document.createElement("script");c.onerror=function(){if(!i)try{r(!1),i=!0}catch(t){}},c.onload=n,c.type="text/javascript",c.id="ftr__script",c.async=!0,c.src=t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(c,a)}function i(){I(S.uAL),setTimeout(c,w,S.uAL)}function c(t){try{var e=t===S.uDF?h:p,n=function(){try{b(),r(t+S.uS)}catch(e){}},c=function(e){try{b(),D.td=1*new Date-D.ts,r(e?t+S.uF+S.cP:t+S.uF),t===S.uDF&&i()}catch(n){r(S.eUoe)}};o(e,void 0,n,c)}catch(a){r(t+S.eTlu)}}var a={write:function(t,e,n,r){void 0===r&&(r=!0);var o,i;if(n?(o=new Date,o.setTime(o.getTime()+24*n*60*60*1e3),i="; expires="+o.toGMTString()):i="",!r)return void(document.cookie=escape(t)+"="+escape(e)+i+"; path=/");var c,a,u;if(u=location.host,1===u.split(".").length)document.cookie=escape(t)+"="+escape(e)+i+"; path=/";else{a=u.split("."),a.shift(),c="."+a.join("."),document.cookie=escape(t)+"="+escape(e)+i+"; path=/; domain="+c;var d=this.read(t);null!=d&&d==e||(c="."+u,document.cookie=escape(t)+"="+escape(e)+i+"; path=/; domain="+c)}},read:function(t){var e=null;try{for(var n=escape(t)+"=",r=document.cookie.split(";"),o=0;o<r.length;o++){for(var i=r[o];" "==i.charAt(0);)i=i.substring(1,i.length);0===i.indexOf(n)&&(e=unescape(i.substring(n.length,i.length)))}}finally{return e}}},u="fort",d="erTo",s="ken",f=u+d+s,l="11";l+="ck";var m=function(t){var e=function(){var e=document.createElement("link");return e.setAttribute("rel","pre"+"con"+"nect"),e.setAttribute("cros"+"sori"+"gin","anonymous"),e.onload=function(){document.head.removeChild(e)},e.onerror=function(t){document.head.removeChild(e)},e.setAttribute("href",t),document.head.appendChild(e),e};if(document.head){var n=e();setTimeout(function(){document.head.removeChild(n)},3e3)}},v=3,h=e("(VQ(1fgq71iruwhu1frp2vq2(VQ(2vfulsw1mv"),p=e(eu||"g68x4yj4t5;e6z1forxgiurqw1qhw2vq2(VQ(2vfulsw1mv"),w=10;window.ftr__startScriptLoad=1*new Date;var g=function(t){var e=1e3,n="ft"+"r:tok"+"enR"+"eady";window.ftr__tt&&clearTimeout(window.ftr__tt),window.ftr__tt=setTimeout(function(){try{delete window.ftr__tt,t+="_tt";var e=document.createEvent("Event");e.initEvent(n,!1,!1),e.detail=t,document.dispatchEvent(e)}catch(r){}},e)},y=function(t){var e=function(t){return t||""},n=e(t.id)+"_"+e(t.ts)+"_"+e(t.td)+"_"+e(t.ex)+"_"+e(l);a.write(f,n,1825,!0),g(n)},T=function(){var t=a.read(f)||"",e=t.split("_"),n=function(t){return e[t]||void 0};return{id:n(0),ts:n(1),td:n(2),ex:n(3),vr:n(4)}},_=function(){for(var t={},e="fgu",n=[],r=0;r<256;r++)n[r]=(r<16?"0":"")+r.toString(16);var o=function(t,e,r,o,i){var c=i?"-":"";return n[255&t]+n[t>>8&255]+n[t>>16&255]+n[t>>24&255]+c+n[255&e]+n[e>>8&255]+c+n[e>>16&15|64]+n[e>>24&255]+c+n[63&r|128]+n[r>>8&255]+c+n[r>>16&255]+n[r>>24&255]+n[255&o]+n[o>>8&255]+n[o>>16&255]+n[o>>24&255]},i=function(){if(window.Uint32Array&&window.crypto&&window.crypto.getRandomValues){var t=new window.Uint32Array(4);return window.crypto.getRandomValues(t),{d0:t[0],d1:t[1],d2:t[2],d3:t[3]}}return{d0:4294967296*Math.random()>>>0,d1:4294967296*Math.random()>>>0,d2:4294967296*Math.random()>>>0,d3:4294967296*Math.random()>>>0}},c=function(){var t="",e=function(t,e){for(var n="",r=t;r>0;--r)n+=e.charAt(1e3*Math.random()%e.length);return n};return t+=e(2,"0123456789"),t+=e(1,"123456789"),t+=e(8,"0123456789")};return t.safeGenerateNoDash=function(){try{var t=i();return o(t.d0,t.d1,t.d2,t.d3,!1)}catch(n){try{return e+c()}catch(n){}}},t.isValidNumericalToken=function(t){return t&&t.toString().length<=11&&t.length>=9&&parseInt(t,10).toString().length<=11&&parseInt(t,10).toString().length>=9},t.isValidUUIDToken=function(t){return t&&32===t.toString().length&&/^[a-z0-9]+$/.test(t)},t.isValidFGUToken=function(t){return 0==t.indexOf(e)&&t.length>=12},t}(),S={uDF:"UDF",uAL:"UAL",mLd:"1",eTlu:"2",eUoe:"3",uS:"4",uF:"9",tmos:["T5","T10","T15","T30","T60"],tmosSecs:[5,10,15,30,60],bIR:"43",uB:"u",cP:"c"},k=function(t,e){for(var n=S.tmos,r=0;r<n.length;r++)if(t+n[r]===e)return!0;return!1};try{var D=T();try{D.id&&(_.isValidNumericalToken(D.id)||_.isValidUUIDToken(D.id)||_.isValidFGUToken(D.id))?window.ftr__ncd=!1:(D.id=_.safeGenerateNoDash(),window.ftr__ncd=!0),D.ts=window.ftr__startScriptLoad,y(D);for(var x="for"+"ter"+".co"+"m",A="ht"+"tps://c"+"dn9."+x,U="ht"+"tps://"+D.id+"-"+siteId+".cd"+"n."+x,F="http"+"s://cd"+"n3."+x,L=[A,U,F],E=0;E<L.length;E++)m(L[E]);var V=new Array(S.tmosSecs.length),I=function(t){for(var e=0;e<S.tmosSecs.length;e++)V[e]=setTimeout(r,1e3*S.tmosSecs[e],t+S.tmos[e])},b=function(){for(var t=0;t<S.tmosSecs.length;t++)clearTimeout(V[t])};k(S.uDF,D.ex)?i():(I(S.uDF),setTimeout(c,w,S.uDF))}catch(C){r(S.mLd)}}catch(C){}})()',document.body.appendChild(n)}},sift:function(e){var t=e.beacon_key,n=e.session_id,r=e.user_id,o=window._sift=window._sift||[];if(o.push(["_setAccount",t]),o.push(["_setUserId",r]),o.push(["_setSessionId",n]),o.push(["_trackPageview"]),!document.querySelector('[src="'.concat(V,'"]'))){var a=document.createElement("script");a.src=V,a.async=!0,document.body.appendChild(a)}},stripe:function(){if(!document.querySelector('[src^="'.concat(P,'"]'))){var e=document.createElement("script");e.src=P,e.async=!0,document.body.appendChild(e)}}},R=document.getElementById("wcpay-account-status-container");R&&r().render((0,e.createElement)((function(t){var n,r,c,s=t.accountStatus;return s.error?(0,e.createElement)("div",null,(0,o.__)("Error determining the connection status.")):(0,e.createElement)("div",null,(0,e.createElement)("div",null,(n=s.status,r=(0,o.__)("Unknown","woocommerce-payments"),c="light","complete"===n?(r=(0,o.__)("Complete","woocommerce-payments"),c="primary"):"restricted_soon"===n?(r=(0,o.__)("Restricted soon","woocommerce-payments"),c="warning"):"restricted"===n?(r=(0,o.__)("Restricted","woocommerce-payments"),c="alert"):n.startsWith("rejected")&&(r=(0,o.__)("Rejected","woocommerce-payments"),c="light"),(0,e.createElement)(I,{message:r,type:c,isCompact:!0})),function(t){var n,r,a;return t?(r=(0,o.__)("Enabled","woocommerce-payments"),a=(0,e.createElement)(D(),{size:18}),n="account-status__info__green"):(r=(0,o.__)("Disabled","woocommerce-payments"),a=(0,e.createElement)(T(),{size:18}),n="account-status__info__red"),(0,e.createElement)("span",{className:"account-status__info"},(0,o.__)("Payments:","woocommerce-payments"),(0,e.createElement)("span",{className:n},a,r))}(s.paymentsEnabled),function(t){var n,r="account-status__info__green",a=(0,e.createElement)(D(),{size:18});return"disabled"===t?(n=(0,o.__)("Disabled","woocommerce-payments"),r="account-status__info__red",a=(0,e.createElement)(T(),{size:18})):"daily"===t?n=(0,o.__)("Daily","woocommerce-payments"):"weekly"===t?n=(0,o.__)("Weekly","woocommerce-payments"):"monthly"===t?n=(0,o.__)("Monthly","woocommerce-payments"):"manual"===t?(n=S((0,o.__)("Temporarily suspended (<a>learn more</a>)","woocommerce-payments"),{a:(0,e.createElement)("a",{href:"https://docs.woocommerce.com/document/payments/faq/deposits-suspended/",target:"_blank",rel:"noopener noreferrer"})}),r="account-status__info__yellow",a=(0,e.createElement)(T(),{size:18})):n=(0,o.__)("Unknown","woocommerce-payments"),(0,e.createElement)("span",{className:"account-status__info"},(0,o.__)("Deposits:","woocommerce-payments"),(0,e.createElement)("span",{className:r},a,n))}(s.depositsStatus)),function(t){var n=t.status,r=t.currentDeadline,c=t.pastDue,s=t.accountLink;if("complete"===n)return"";var u="";return"restricted_soon"===n?u=S((0,o.sprintf)((0,o.__)("To avoid disrupting deposits, <a>update this account</a> by %s with more information about the business.","woocommerce-payments"),(0,a.dateI18n)("ga M j, Y",i()(1e3*r).toISOString())),{a:(0,e.createElement)("a",{href:s})}):"restricted"===n&&c?u=S((0,o.__)("Payments and deposits are disabled for this account until missing business information is updated. <a>Update now</a>","woocommerce-payments"),{a:(0,e.createElement)("a",{href:s})}):"restricted"===n?u=(0,o.__)("Payments and deposits are disabled for this account until business information is verified by the payment processor.","woocommerce-payments"):"rejected.fraud"===n?u=(0,o.__)("This account has been rejected because of suspected fraudulent activity.","woocommerce-payments"):"rejected.terms_of_service"===n?u=(0,o.__)("This account has been rejected due to a Terms of Service violation.","woocommerce-payments"):n.startsWith("rejected")&&(u=(0,o.__)("This account has been rejected.","woocommerce-payments")),u?(0,e.createElement)("div",{className:"account-status__desc"},u):null}(s))}),wcpayAdminSettings),R);var G=document.getElementById("wcpay-account-fees-container");G&&r().render((0,e.createElement)((function(t){var n=t.accountFees,r=n.base,a=r,c=(0,o.sprintf)((0,o.__)("%1$.1f%% + %2$s per transaction","woocommerce-payments"),100*a.percentage_rate,B(a.fixed_rate,r.currency));if(n.discount.length){var i,s;(a=n.discount[0]).discount?(i=r.percentage_rate*(1-a.discount),s=r.fixed_rate*(1-a.discount)):(i=a.percentage_rate,s=a.fixed_rate);var u=(0,o.sprintf)((0,o.__)("<s>%1$s</s> %2$.1f%% + %3$s per transaction","woocommerce-payments"),c,100*i,B(s,r.currency));a.discount&&(u+=" "+(0,o.sprintf)((0,o.__)("(%1$d%% discount)","woocommerce-payments"),100*a.discount)),c=S(u,{s:(0,e.createElement)("s",null)})}return(0,e.createElement)(e.Fragment,null,(0,e.createElement)("p",null,c),(0,e.createElement)(F,{feeData:a}),(0,e.createElement)(M,{feeData:a}),(0,e.createElement)("p",null,(0,e.createElement)("a",{href:n.discount.length?"https://woocommerce.com/terms-conditions/woocommerce-payments-promotion/":"https://docs.woocommerce.com/document/payments/faq/fees/",target:"_blank",rel:"noopener noreferrer"},(0,o.__)("Learn more","woocommerce-payments"))))}),wcpayAdminSettings),G);var W=document.querySelector("form#mainform"),Q=document.getElementById("woocommerce_woocommerce_payments_manual_capture");W&&Q&&!Q.checked&&W.addEventListener("submit",(function(e){Q.checked&&(confirm((0,o.__)("When manual capture is enabled, charges must be captured within 7 days of authorization, otherwise the authorization and order will be canceled. Are you sure you want to enable it?","woocommerce-payments"))||e.preventDefault())})),window.addEventListener("load",(function(){!function(e){for(var t in e){var n=$[t];n&&e[t]&&n(e[t])}}(wcpayAdminSettings.fraudServices)}));var Y=document.getElementById("wcpay-account-settings-container");Y&&r().render((0,e.createElement)((function(){return(0,e.createElement)("div",null)}),wcpayAdminSettings),Y);var H=function(e,t){for(;(e=e.parentElement)&&!(e.matches||e.matchesSelector).call(e,t););return e},J=function(e,t){(e instanceof Element||e instanceof HTMLElement)&&(e.style.display=t?"":"none")},K=document.getElementById("woocommerce_woocommerce_payments_payment_request"),X=document.getElementById("woocommerce_woocommerce_payments_payment_request_button_type");K.addEventListener("change",(function(){var e=["woocommerce_woocommerce_payments_payment_request_button_theme","woocommerce_woocommerce_payments_payment_request_button_type","woocommerce_woocommerce_payments_payment_request_button_height","woocommerce_woocommerce_payments_payment_request_button_locations"];K.checked?e.forEach((function(e){J(H(document.getElementById(e),"tr"),!0)})):e.forEach((function(e){J(H(document.getElementById(e),"tr"),!1)})),X.dispatchEvent(new Event("change"))})),X.addEventListener("change",(function(){"custom"===X.value&&K.checked?J(H(document.getElementById("woocommerce_woocommerce_payments_payment_request_button_label"),"tr"),!0):J(H(document.getElementById("woocommerce_woocommerce_payments_payment_request_button_label"),"tr"),!1),"branded"===X.value&&K.checked?J(H(document.getElementById("woocommerce_woocommerce_payments_payment_request_button_branded_type"),"tr"),!0):J(H(document.getElementById("woocommerce_woocommerce_payments_payment_request_button_branded_type"),"tr"),!1)})),K.dispatchEvent(new Event("change")),X.dispatchEvent(new Event("change"))}()}();