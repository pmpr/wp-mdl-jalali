/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
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
/************************************************************************/
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./asset/js/admin.js + 1 modules ***!
  \***************************************/

;// CONCATENATED MODULE: external "jQuery"
const external_jQuery_namespaceObject = jQuery;
var external_jQuery_default = /*#__PURE__*/__webpack_require__.n(external_jQuery_namespaceObject);
;// CONCATENATED MODULE: ./asset/js/admin.js


external_jQuery_default()(document).ready(function () {

    let MonthNames = ['', 'فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'];

    function getMonthName(month = 0)
    {
        let months = PMPRUtil.getSettingByPath('months');

        if (month > 0) {

            month = months[month - 1];
        } else {

            month = '';
        }

        return month;
    }

    function timestampDivModifier(year, month, day, hour, min) {

        let content = '<div class="timestamp-wrap jalaliDivBox">',
            sel = '';

        content += '<select id="Jmm" name="Jmm">';
        for (let i = 1; i <= 12; i++) {
            if (i == month)
                sel = 'selected="selected"';
            else
                sel = '';
            content += '<option ' + sel + ' value="' + i + '">' + getMonthName(i) + '</option>';
        }

        content += '</select>';

        content += '<input type="text" name="Jjj" value="' + day + '" id="Jjj" size="2" maxlength="2" autocomplete="off" />,';
        content += '<input type="text" name="Jaa" value="' + year + '" id="Jaa" size="4" maxlength="4" autocomplete="off" /> @';
        content += '<input type="text" name="Jmn" value="' + min + '" id="Jmn" size="2" maxlength="2" autocomplete="off" /> : ';
        content += '<input type="text" name="Jhh" value="' + hour + '" id="Jhh" size="2" maxlength="2" autocomplete="off" />';
        content += '</div>';

        return content;
    }

    function changeTimestampViewer() {

        let y = external_jQuery_default()('input[name=aa]').val(),
            m = external_jQuery_default()('select[name=mm]').val(),
            d = external_jQuery_default()('input[name=jj]').val(),
            h = external_jQuery_default()('input[name=hh]').val(),
            i = external_jQuery_default()('input[name=mn]').val(),
            jd = JalaliDate.gregorianToJalali(y, m, d),
            ret = '',
            $text = getMonthName(jd[1]) + ' ' + jd[2] + ', ' + jd[0] + ' @' + h + ':' + i;

        for (let index = 0; index < $text.length; index++) {
            if (!isNaN($text[index]) && $text[index] != ' ') {

                ret += String.fromCharCode($text.charCodeAt(index) + 1728);
            } else {
                ret += $text[i];
            }
        }
        external_jQuery_default()('#timestamp b').text(ret);

    }

    external_jQuery_default()('#the-list').on('click', '.editinline', function () {

        let tr = external_jQuery_default()(this).closest('td'),
            year = tr.find('.aa').html();

        if (year > 1700) {

            let month = tr.find('.mm').html(),
                day = tr.find('.jj').html(),
                hour = tr.find('.hh').html(),
                min = tr.find('.mn').html(),
                date = JalaliDate.gregorianToJalali(year, month, day);

            external_jQuery_default()('.inline-edit-date div').hide();
            external_jQuery_default()('.inline-edit-date').prepend(timestampDivModifier(date[0], date[1], date[2], hour, min));
        }
    });

    let $inlineEditDate = external_jQuery_default()('.inline-edit-date');
    if (!PMPRUtil.isEmpty($inlineEditDate)) {

        $inlineEditDate.on('keyup', '#Jhh', function (e) {
            external_jQuery_default()('input[name=hh]').val(external_jQuery_default()(this).val());
        });

        $inlineEditDate.on('keyup', '#Jmn', function (e) {
            external_jQuery_default()('input[name=mn]').val(external_jQuery_default()(this).val());
        });

        $inlineEditDate.on('keyup', '#Jaa , #Jjj', function (e) {

            let year = external_jQuery_default()('#Jaa').val(),
                month = external_jQuery_default()('#Jmm').val(),
                day = external_jQuery_default()('#Jjj').val(),
                date = JalaliDate.jalaliToGregorian(year, month, day);

            external_jQuery_default()('input[name=aa]').val(date[0]);
            external_jQuery_default()('select[name=mm]').val(date[1]);
            external_jQuery_default()('input[name=jj]').val(date[2]);
        });

        $inlineEditDate.on('change', '#Jmm', function () {

            let year = external_jQuery_default()('#Jaa').val(),
                month = external_jQuery_default()('#Jmm').val(),
                day = external_jQuery_default()('#Jjj').val(),
                date = JalaliDate.jalaliToGregorian(year, month, day);

            external_jQuery_default()('input[name=aa]').val(date[0]);
            if (date[1] < 10) date[1] = '0' + date[1];
            external_jQuery_default()('select[name=mm]').val(date[1]);
            external_jQuery_default()('input[name=jj]').val(date[2]);
        });
    }

    /* =================================================================== */
    /**
     * in edit.php
     */

    external_jQuery_default()('a.edit-timestamp').on('click', function () {
        let date = JalaliDate.gregorianToJalali(external_jQuery_default()('#aa').val(), external_jQuery_default()('#mm').val(), external_jQuery_default()('#jj').val()),
            divCnt = timestampDivModifier(date[0], date[1], date[2], external_jQuery_default()('#hh').val(), external_jQuery_default()('#mn').val());
        external_jQuery_default()('#timestampdiv .timestamp-wrap').hide();
        external_jQuery_default()('#timestampdiv').prepend(divCnt);
    });


    external_jQuery_default()('#timestampdiv .cancel-timestamp').on('click', function () {
        external_jQuery_default()('.jalaliDivBox').remove();
    });

    external_jQuery_default()('.save-timestamp,#publish').on('click', function () {

        if (external_jQuery_default()('#Jhh').val() !== undefined) {

            external_jQuery_default()('input[name=hh]').val(external_jQuery_default()('#Jhh').val());
            external_jQuery_default()('input[name=mn]').val(external_jQuery_default()('#Jmn').val());

            let year = external_jQuery_default()('#Jaa').val(),
                month = external_jQuery_default()('#Jmm').val(),
                day = external_jQuery_default()('#Jjj').val(),
                jDate = [year, month, day],
                date = JalaliDate.jalaliToGregorian(year, month, day);

            if (date[1] < 10) date[1] = '0' + date[1];

            external_jQuery_default()('input[name=aa]').val(date[0]);
            external_jQuery_default()('select[name=mm]').val(date[1]);
            external_jQuery_default()('input[name=jj]').val(date[2]);
        }

        setTimeout(function () {
            if (external_jQuery_default()('#timestampdiv .timestamp-wrap:eq(1)').hasClass('form-invalid')) {

                external_jQuery_default()('.jalaliDivBox').addClass('.form-invalid');
            } else {
                external_jQuery_default()('.jalaliDivBox').remove();
                external_jQuery_default()('#timestampdiv').slideUp('fast');
                external_jQuery_default()('a.edit-timestamp').slideDown('fast');

                setTimeout(function () {
                    changeTimestampViewer()
                }, 100);
            }
        }, 100);
    });

});

/******/ })()
;