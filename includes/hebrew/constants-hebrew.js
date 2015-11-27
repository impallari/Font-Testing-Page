var GRUMPIES = {
    'short': {
        'text': "דג סקרן שט בים זך ולפתע מצא חברה. זה רעך יצחק הטייס, מתעופף כנשר גדול בין שמים וארץ. כך התרסק נפץ על גוזל קטן, שדחף את צבי למים. לכן חכו לי נאם ה׳ ליום קומי לעד, כי משפטי לאסף גוים לקובצי ממלכות, לשפך עליהם זעמי כל חרון אפי, כי באש קנאתי תאכל כל הארץ",
        'columns': [ // single column
            {
                sizes: [96, 84, 72, 60, 48, 36, 30, 29, 28, 27, 26, 25, 24, 23, 22, 21, 20, 19, 18, 17, 16, 15, 14, 13, 12],
                innerblock: 'div'
            }
        ],
        'tab': '#headlines'
    },

    'long': {
        'text': "דג סקרן שט בים זך ולפתע מצא חברה. זה רעך יצחק הטייס, מתעופף כנשר גדול בין שמים וארץ. כך התרסק נפץ על גוזל קטן, שדחף את צבי למים. לכן חכו לי נאם ה׳ ליום קומי לעד, כי משפטי לאסף גוים לקובצי ממלכות, לשפך עליהם זעמי כל חרון אפי, כי באש קנאתי תאכל כל הארץ. או הנסה אלהים, לבוא לקחת לו גוי מקרב גוי, במסת באתת ובמופתים ובמלחמה וביד חזקה ובזרוע נטויה, ובמוראים גדלים: ככל אשר־עשה לכם ה' אלהיכם, במצרים – לעיניך. זה הדבר אשר צוה ה׳ לקטו ממנו איש לפי אכלו עמר לגלגלת מספר נפשתיכם איש לאשר באהלו תקחו. 01234567890 ",
        'columns': [ // two columns
            {sizes: [20, 19, 18, 17], innerblock: '.textsettingCol1'},
            {sizes: [16, 15, 14, 13, 12, 11, 10], innerblock: '.textsettingCol2'}
        ],
        'tab': '#text'
    },

    'lowercaseShort': {
        'text': "איך נטוס עם גד כץ הזקן שמחלף בצרפת עטלף אבק נס דרך מזגן שהתפוצץ כי חם כהרף עין נשבט לך גוץ צמא דם תפס חזק מנעולן הפך כף חצץ שגזר קט איבד סתם מחבל קנטרן שזעף פצץ אגד וכך הסתים קמצן אץ עם כף, מצא פרוטת בדיל, שגנזה",
        'columns': [
            {sizes: [96, 84, 72, 60, 48, 36, 30, 24, 18], innerblock: 'div:first'}
        ],
        'tab': '#lowercases'
    },

    'lowercaseLong': {
        'text': "איך נטוס עם זקן גס ליטף את הכרוב עד שצמח גד כץ הזקן שמחלף בצרפת עטלף אבק נס דרך מזגן שהתפוצץ לביא טרף גמד זקן שחסך הצעות כי חם איך בלש תפס גמד רוצח עז קטנה כהרף עין נשבט הקצין גד חזר ותבע כיסא איש מצטדק פגע חסרת כל למשפט לך גוץ צמא דם תפס חזק הזר שטיגן תפוד בכלא צעק חמס מנעולן הפך כף חצץ שגזר קט איבד סתם מחבל קנטרן שזעף השפן טעם ביס ואכל קצת גנב שהעז אכל חינם צדף קר וטס גזר חד פצץ פגז מחק את העצל שבכורדיסטן אגד וכך הסתים קמצן אץ עם כף חלזון גרש כי התעסק הצדק פגש את טמבל נוסע כחזיר בצדף טמא מצא פרוטת בדיל, שגנזה חסכן קל דעת בארץ פשוט הגזים",
        'columns': [
            {sizes: [16, 15, 14], innerblock: '.textsettingCol1'},
            {sizes: [13, 12, 11, 10], innerblock: '.textsettingCol2'}
        ],
        'tab': '#lowercases'
    }

};

var hintsCaps = "אבגדהוזחטיךכלםמןנסעףפץצקרשת";
var hintsNumbers= "1234567890 @ &amp;!?#$€%";


function eventTextLineChange(e) {
    var $this = $(this);
    bulkChangeTextForTab(e.data.grumpy, $this.text(), $this);
}


function onblur() {
    var $this = $(this);
    var text = $this.html();
    if ($this.data('enter') !== text) {
        $this.data('enter', text);
        $this.trigger({type: 'change', action : 'save'});
    }
    return $this;
}


function onkeyup() {
    var $this = $(this);
    var text = $this.html();
    if ($this.data('before') !== text) {
        $this.data('before', text);
        $this.trigger({type: 'change', action : 'update'});
    }
    return $this;
}


function onfocus() {
    var $this = $(this);
    $this.data('enter', $this.html());
    $this.data('before', $this.html());
    return $this;
}


function setColumnTemplate(container, grumpy) {
    for (var k = 0; k < grumpy.columns.length; k++) {

        var sizes = grumpy.columns[k].sizes;
        var block = container.find(grumpy.columns[k].innerblock);
        for (var i = 0; i < sizes.length; i++) {
            fontsize = sizes[i].toString();
            block.append($('<p>').addClass('sizelabel').text(fontsize + 'px'));

            var textline = $('<p>').addClass('textline')
                .css('font-size', fontsize + 'px')
                .attr('contenteditable', true)
                .text(grumpy.text)
                .on('focus', onfocus)
                .on('keyup paste', onkeyup)
                .on('blur', onblur)
                .on('change', {'grumpy': grumpy}, eventTextLineChange);

            block.append(textline);
            //block.append($('<p>&nbsp;</p>'));
        }
    }
}

function setColumnTemplate2(container, grumpy) {
    for (var k = 0; k < grumpy.columns.length; k++) {

        var sizes = grumpy.columns[k].sizes;
        var block = container.find(grumpy.columns[k].innerblock);
        for (var i = 0; i < sizes.length; i++) {
            fontsize = sizes[i].toString();
            block.append($('<p>').addClass('sizelabel').text(fontsize + 'px'));

            var textline = $('<p>').addClass('textline')
                .css('font-size', fontsize + 'px')
                .attr('contenteditable', true)
                .text(grumpy.text)
                .on('focus', onfocus)
                .on('keyup paste', onkeyup)
                .on('blur', onblur)
                .on('change', {'grumpy': grumpy}, eventTextLineChange);

            block.append(textline);
            block.append($('<p>&nbsp;</p>'));
        }
    }
}


function setSplitSingleToDual(container, grumpies_short, grumpies_long) {
    setColumnTemplate(container, grumpies_short);
    setColumnTemplate(container, grumpies_long);
}


function bulkChangeTextForTab(grumpy, value, except) {
    for (var i = 0; i < grumpy.columns.length; i++) {
        $(grumpy.tab).find(grumpy.columns[i].innerblock).find('.textline').not(except).text(value);
    }
}


function prepareAndShowFontLayout() {

    setColumnTemplate($('#headlines'), GRUMPIES.short);

    setColumnTemplate2($('#text'), GRUMPIES.long);

    var $lowercases = $('#lowercases');
    setColumnTemplate($lowercases, GRUMPIES.lowercaseShort);
    setColumnTemplate2($lowercases, GRUMPIES.lowercaseLong);

    var hints_caps = $('.hints-caps');
    var hints_numbers = $('.hints-numbers');
//     var hints_lower = $('.hints-lower');
//     hints_lower.html(hints_lower.html() + hintsLower);
    hints_caps.html(hints_caps.html() + hintsCaps);
    hints_numbers.html(hints_numbers.html() + hintsNumbers);
}