/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ 167:
/*!************************************************!*\
  !*** ./asset/scss/plugin/dokan/dashboard.scss ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ 753:
/*!*********************************!*\
  !*** ./asset/js/plugin/plot.js ***!
  \*********************************/
/***/ (() => {

(function ($) {

    function init(plot) {

        plot.hooks.processOptions.push(function (plot, options) {

            if (!options.xaxes || options.xaxes.persian === true) return;

            options.xaxes.persian = true;

            const x = options.xaxes[0];

            delete x.monthNames;
            delete x.timeformat;

            x.tickFormatter = (val, axis) => {
                return new window.persianDate(val).format('DD MMMM');
            };

            if (x.minTickSize
                && x.minTickSize[1] === "day") {
                x.minTickSize = [1, "day"];
            }
        });

    }

    PRHelper.getHook().on('DOMContentLoaded', () => {
        if (typeof $.plot !== "undefined") {
            $.plot.plugins.push({
                init: init,
                options: {},
                name: "persianDate",
                version: "1.0"
            });
        }
    });

})(window.jQuery);


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
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
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
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!********************************************!*\
  !*** ./asset/js/plugin/dokan/dashboard.js ***!
  \********************************************/
/* harmony import */ var _plot__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../plot */ 753);
/* harmony import */ var _plot__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_plot__WEBPACK_IMPORTED_MODULE_0__);
__webpack_require__(/*! ../../../scss/plugin/dokan/dashboard.scss */ 167);



(function () {

    const HookHelper    = PRHelper.getHook(),
          HTMLHelper    = PRHelper.getHTML(),
          ToolHelper    = PRHelper.getTool(),
          SettingHelper = PRHelper.getSetting();

    HookHelper.on('DOMContentLoaded', () => {
        const orderRangeInput = HTMLHelper.getElementByID('order_filter_date_range');
        if (HTMLHelper.isElement(orderRangeInput)) {

            HTMLHelper.remove('#order_filter_end_date');
            HTMLHelper.remove('#order_filter_start_date');

            const orderRangeparent    = HTMLHelper.getParent(orderRangeInput),
                  orderRangeHTML      = SettingHelper.getOption('order_filter_date_range_html'),
                  orderRangeNewInputs = HTMLHelper.createElement(orderRangeHTML);

            HTMLHelper.replace(orderRangeNewInputs, orderRangeInput, true);
            HookHelper.doAction('form_generator_field_added_to_dom', orderRangeparent);
        }
        const reportRangeInput = HTMLHelper.getElement('#dokan-v-dashboard-reports .dokan-daterangepicker');
        if (HTMLHelper.isElement(reportRangeInput)) {

            HTMLHelper.remove('[name="start_date_alt"]');
            HTMLHelper.remove('[name="end_date_alt"]');

            const reportRangeparent    = HTMLHelper.getParent(reportRangeInput),
                  reportRangeHTML      = SettingHelper.getOption('report_date_range_html'),
                  reportRangeNewInputs = HTMLHelper.createElement(reportRangeHTML);

            HTMLHelper.replace(reportRangeNewInputs, reportRangeInput, true);
            HookHelper.doAction('form_generator_field_added_to_dom', reportRangeparent);
        }
    });

    HookHelper.observe('#dokan-coupon-form input#date_expires', async (input) => {
        await ToolHelper.delay(50)
        HTMLHelper.addClass(input, 'pr-datepicker');
        const oneDay = 24 * 60 * 60 * 1000;
        HookHelper.doAction('form_generator_field_added_to_dom', HTMLHelper.getParent(input), {
            minDate: Date.now() + oneDay,
            toolbox: {todayButton: {enabled: false, text: {fa: '', en: ''}}}
        });
        HookHelper.on('change', async (event, element) => {
            const value = HTMLHelper.getValue(element);
            if (PRHelper.getType().isDate(value)) {
                const form = HTMLHelper.getParent(element, 'form');
                HTMLHelper.addClass(form, 'pr-loading');
                await selectReactDate(value);
                HTMLHelper.removeClass(form, 'pr-loading');
            }
        }, input);
    });

    convertDatatableDatesToPersian('#dokan-coupon-dashboard', 6, 'DD MMMM YYYY')
    convertDatatableDatesToPersian('#dokan-withdraw-request-data-view', 4, 'DD MMMM YYYY در HH:mm')

    HookHelper.observe('.components-datetime__date', (datepicker) => {
        const container = HTMLHelper.getParent(datepicker, '.components-popover__fallback-container');
        HTMLHelper.addClass(container, 'dokan-datepicker-component');
    });

    function getCurrentReactCalendar() {

        const firstDay = HTMLHelper.getElement('.dokan-datepicker-component button.components-datetime__date__day');

        if (!HTMLHelper.isElement(firstDay)) return {year: 0, month: 0, day: 0};

        const aria = HTMLHelper.getAttribute(firstDay, 'aria-label');

        return PRHelper.getI18n().dateToGregorian(aria);
    }

    function clickNext() {
        const heading = HTMLHelper.getElement('.dokan-datepicker-component .components-heading');
        if (HTMLHelper.isElement(heading)) {
            const header  = HTMLHelper.getParent(heading),
                  nextBTN = HTMLHelper.getLast(header, 'button');

            HookHelper.simulateClick(nextBTN);
        }
    }

    function clickPrev() {
        const heading = HTMLHelper.getElement('.dokan-datepicker-component .components-heading');
        if (HTMLHelper.isElement(heading)) {
            const header  = HTMLHelper.getParent(heading),
                  prevBTN = HTMLHelper.getFirst(header, 'button');

            HookHelper.simulateClick(prevBTN);
        }
    }

    function findDayElement(day) {

        const nodeList = HTMLHelper.getElements('.dokan-datepicker-component button.components-datetime__date__day');

        if (!nodeList || !nodeList.length) return null;

        day = String(day).trim();

        const btns = Array.from(nodeList);

        const valid = btns.filter(btn => {
            return btn.innerText.trim() === day;
        });

        return valid.length ? valid[0] : null;
    }

    function getMonthDiff(currentYear, currentMonth, targetYear, targetMonth) {
        return (targetYear - currentYear) * 12 + (targetMonth - currentMonth);
    }

    async function selectReactDate(isoDateString) {

        HookHelper.simulateClick('label[for="date_expires"]');

        await ToolHelper.delay(40);

        const clean     = isoDateString.replace(/[/\.]/g, "-"),
              [y, m, d] = clean.split("-").map(Number);

        const targetY = y;
        const targetM = m;
        const targetD = d;

        await navigateToMonth(targetY, targetM);

        const tryClick = () => {
            const element = findDayElement(targetD);
            if (element) HookHelper.simulateClick(element);
        };

        setTimeout(tryClick, 20);
        setTimeout(tryClick, 20);
    }

    async function navigateToMonth(targetYear, targetMonth) {

        const {year, month, day} = getCurrentReactCalendar();
        if (year <= 0) return;

        const diff = getMonthDiff(year, month, targetYear, targetMonth);
        if (diff === 0) return;

        if (diff > 0) {
            for (let i = 0; i < diff; i++) {
                clickNext();
                await ToolHelper.delay(40);
            }
        } else {
            for (let i = 0; i < Math.abs(diff); i++) {
                clickPrev();
                await ToolHelper.delay(40);
            }
        }
    }

    function convertDatatableDatesToPersian(selectorPrefix, tdIndex, format) {

        HookHelper.observe(`${selectorPrefix} .dataviews-view-table td`, async (td) => {
            await ToolHelper.delay(50)

            const table = HTMLHelper.getParent(td, '.dataviews-view-table');
            if (!HTMLHelper.isElement(table)) return;

            const rows = HTMLHelper.getElements('tbody tr', table);
            PRHelper.getType().each(rows, (row) => {

                const cell = HTMLHelper.getElement(`td:nth-child(${tdIndex})`, row);
                if (!HTMLHelper.isElement(cell)) return;
                const persianDiv = HTMLHelper.getElement('div.persian-date', cell);
                if (HTMLHelper.isElement(persianDiv)) return;
                const contentDiv = HTMLHelper.getElement('div', cell);
                if (!HTMLHelper.isElement(contentDiv)) return;

                const original                         = contentDiv.textContent.trim(),
                      {year, month, day, hour, minute} = PRHelper.getI18n().dateToGregorian(original);

                if (year > 0) {

                    HTMLHelper.hide(contentDiv);

                    const datetime    = new Date(year, month - 1, day, hour, minute),
                          persianDate = new window.persianDate(datetime.getTime()).format(format);

                    HTMLHelper.insert(`<div class="dataviews-view-table__cell-content-wrapper persian-date">${persianDate}</div>`, contentDiv);
                }
            });
        });
    }
})();

})();

/******/ })()
;