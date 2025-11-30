/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ 34:
/*!***********************************************!*\
  !*** ./asset/scss/plugin/dokan/checkout.scss ***!
  \***********************************************/
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
/*!*******************************************!*\
  !*** ./asset/js/plugin/dokan/checkout.js ***!
  \*******************************************/
__webpack_require__(/*! ../../../scss/plugin/dokan/checkout.scss */ 34);

(function () {

    const TypeHelper = PRHelper.getType(),
          HookHelper = PRHelper.getHook(),
          HTMLHelper = PRHelper.getHTML();

    HookHelper.on('DOMContentLoaded', () => {
        const datepickerInputs = HTMLHelper.getElements('.delivery-time-date-picker[type="text"]');
        TypeHelper.each(datepickerInputs, (datepickerInput) => {
            HTMLHelper.setValue(datepickerInput, Date.now());
            HTMLHelper.addClass(datepickerInput, 'pr-datepicker');
            const parent = HTMLHelper.getParent(datepickerInput);
            HookHelper.doAction('form_generator_field_added_to_dom', parent);
        });
    });
})();

})();

/******/ })()
;