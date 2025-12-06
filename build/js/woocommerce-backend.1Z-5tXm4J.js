/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ 369:
/*!****************************************************!*\
  !*** ./asset/scss/plugin/woocommerce/backend.scss ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!************************************************!*\
  !*** ./asset/js/plugin/woocommerce/backend.js ***!
  \************************************************/
__webpack_require__(/*! ../../../scss/plugin/woocommerce/backend.scss */ 369);

(function () {

    const HookHelper = PRHelper.getHook(),
          HTMLHelper = PRHelper.getHTML(),
          ToolHelper = PRHelper.getTool();

    convertChartDatesToPersian('#woocommerce-dashboard__dashboard-charts .woocommerce-dashboard__dashboard-charts', 'DD dddd');

    function convertChartDatesToPersian(selectorPrefix, format) {

        HookHelper.observe(`${selectorPrefix} .components-card__body svg`, async (svg) => {

            await ToolHelper.delay(50);
            const texts = HTMLHelper.getElements('g.tick:not(:first-child) text', svg);

            PRHelper.getType().each(texts, (text) => {
                const original = text.textContent.trim();
                const {year, month, day, hour, minute} = PRHelper.getI18n().dateToGregorian(original);
            });
        });
    }

})();



})();

/******/ })()
;