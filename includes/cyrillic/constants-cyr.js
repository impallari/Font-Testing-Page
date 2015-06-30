var GRUMPIES = {
    'short': {
        'text': "Разъяренный чтец эгоистично бьёт пятью жердями шустрого фехтовальщика. Наш банк вчера же выплатил Ф.Я. Эйхгольду комиссию за ценные вещи. Эх, чужак, общий съём цен шляп (юфть) – вдрызг! В чащах юга жил бы цитрус? Да, но фальшивый экземпляр!",
        'columns': [ // single column
            {
                sizes: [96, 84, 72, 60, 48, 36, 30, 29, 28, 27, 26, 25, 24, 23, 22, 21, 20, 19, 18, 17, 16, 15, 14, 13, 12],
                innerblock: 'div'
            }
        ],
        'tab': '#headlines'
    },

    'long': {
        'text': "Разъяренный чтец эгоистично бьёт пятью жердями шустрого фехтовальщика. Все счастливые семьи похожи друг на друга, каждая несчастливая семья несчастлива по-своему. Все смешалось в доме Облонских. Жена узнала, что муж был в связи с бывшею в их доме француженкою-гувернанткой, и объявила мужу, что не может жить с ним в одном доме. Положение это продолжалось уже третий день и мучительно чувствовалось и самими супругами, и всеми членами семьи, и домочадцами. 01234567890",
        'columns': [ // two columns
            {sizes: [20, 19, 18, 17], innerblock: '.textsettingCol1'},
            {sizes: [16, 15, 14, 13, 12, 11, 10], innerblock: '.textsettingCol2'}
        ],
        'tab': '#text'
    },

    'lowercaseShort': {
        'text': "разъяренный чтец эгоистично бьёт пятью жердями шустрого фехтовальщика. в чащах юга жил бы цитрус? да, но фальшивый экземпляръ!",
        'columns': [
            {sizes: [96, 84, 72, 60, 48, 36, 30, 24, 18], innerblock: 'div:first'}
        ],
        'tab': '#lowercases'
    },

    'lowercaseLong': {
        'text': "дон мниться уехавший пир ванильный юру рез тернистый многокаскадный жгла бедлам сгрызи паф бард опрыскиваться пряха калёный фанг жало целлюлит рыл ветрогонка мямлить народничество офтальмология выползи эхо ославившийся агнец лье юный него гром изгони крылья крейсерство лат джем родной уменьшать механохимия превысокий нивх тулуп забрало уснащение рой обобщаемый юфть уверение носочек отчленится впряг посул фланг щепа сгоню метеорит негде кушак ушей обматывать хау бестия елей спор бочечка червяк некислый заставляемый выступать выкат шанс пук вильнуть этажом ложа жёг прём разъяснить осциллограф фидеист винопровод ритуал юность оздоровляющий",
        'columns': [
            {sizes: [16, 15, 14], innerblock: '.textsettingCol1'},
            {sizes: [13, 12, 11, 10], innerblock: '.textsettingCol2'}
        ],
        'tab': '#lowercases'
    },

    'adhesionShort': {
        'text': "бал баобаб баба клоака око балаболка лба кабала балаболка клок клок колокол абак бабка балл балл каббала кал кокк бак бабка блок ба обо бокал кокк кабала абак око баобаб какао балаболка",
        'columns': [
            {sizes: [96, 84, 72, 60, 48, 36, 30, 24, 18], innerblock: 'div:first'}
        ],
        'tab': '#adhesion'
    },

    'adhesionLong': {
        'text': "бал баобаб баба клоака око балаболка лба кабала балаболка клок клок колокол абак бабка балл балл каббала кал кокк бак бабка блок ба обо бокал кокк кабала абак око баобаб какао балаболка обо около око лоб бокал кок клоака боб лобок балаболка ко колокол око балаболка баба колокол кол балаболка коала бабка клоака ба клок клака облако колобок балл лак ба блок клок колобок алло колобок балка колба облако лобок клок лак колобок об лоб оба ба колобок каббала колок балаболка как бал оба облако кол каббала каббала блок бал обо кабала балл балл каббала кокк бок клоака",
        'columns': [
            {sizes: [16, 15, 14], innerblock: '.textsettingCol1'},
            {sizes: [13, 12, 11, 10], innerblock: '.textsettingCol2'}
        ],
        'tab': '#adhesion'
    },

    'hamburgefonstivShort': {
        'text': "бурун каркас бессребреник каноник коса бисеринка анфас русофоб оборона крик собес неискренна бука сак фокус фора оба кои берберка аронник бек как бессребреник наркобарон кинофабрика сберкасса бенуар урка киска барбарисник осенне нарос сокурсник носок серебро искренен кинофабрика ори ау обноски кабак икебана искренна сок кара араб неискренне бессребреник аксессуар искоренение бус обрубание раскурка неискренни рис рака наискосок барак усик фара носок сеноуборка собрание бикини бессребреник нас басконка бурун кинофабрика осина",
        'columns': [
            {sizes: [96, 84, 72, 60, 48, 36, 30, 24, 18], innerblock: 'div:first'}
        ],
        'tab': '#hamburgefonstiv'
    },

    'hamburgefonstivLong': {
        'text': "бурун каркас бессребреник каноник коса бисеринка анфас русофоб оборона крик собес неискренна бука сак фокус фора оба кои берберка аронник бек как бессребреник наркобарон кинофабрика сберкасса бенуар урка киска барбарисник осенне нарос сокурсник носок серебро искренен кинофабрика ори ау обноски кабак икебана искренна сок кара араб неискренне бессребреник аксессуар искоренение бус обрубание раскурка неискренни рис рака наискосок барак усик фара носок сеноуборка собрание бикини бессребреник нас басконка бурун кинофабрика осина баобаб сии фрикасе ассонанс сник ар книксен барбарисник он неси собрание крикун коронер они фиаско фибра араб бакан кок банк сребреник",
        'columns': [
            {sizes: [16, 15, 14], innerblock: '.textsettingCol1'},
            {sizes: [13, 12, 11, 10], innerblock: '.textsettingCol2'}
        ],
        'tab': '#hamburgefonstiv'
    },

    'caps': {
        'text': "Овощеконсервный Впрок Мутагенный Набег Шёлк Факел Зам Дурной Пас Выволокут Утёр Рытый Свалять Зигзаг Аул Остывавший Лес Сиянье Вопрут Гололёд Злак Одухотворённость Лазутчица Аккредитация Диспетчеризация Изобразивший 0 1 2 3 4 5 6 7 8 9 ! ?",
        'columns': [
            {sizes: [60, 48, 36, 30, 28, 24, 20, 18, 16, 14, 13], innerblock: 'div'}
        ],
        'tab': '#caps'
    },

    'allcaps': {
        'text': "ОВОЩЕКОНСЕРВНЫЙ ВПРОК МУТАГЕННЫЙ НАБЕГ ШЁЛК ФАКЕЛ ЗАМ ДУРНОЙ ПАС ВЫВОЛОКУТ УТЁР РЫТЫЙ СВАЛЯТЬ ЗИГЗАГ АУЛ ОСТЫВАВШИЙ ЛЕС СИЯНЬЕ ВОПРУТ ГОЛОЛЁД ЗЛАК ОДУХОТВОРЁННОСТЬ ЛАЗУТЧИЦА АККРЕДИТАЦИЯ ДИСПЕТЧЕРИЗАЦИЯ ИЗОБРАЗИВШИЙ 0 1 2 3 4 5 6 7 8 9 ! ?",
        'columns': [
            {sizes: [60, 48, 36, 30, 28, 24, 20, 18, 16, 14, 13], innerblock: 'div'}
        ],
        'tab': '#allcaps'
    }
};

var hintsCaps = "АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ";
var hintsLower = "абвгдеёжзийклмнопрстуфхцчшщъыьэюя.:;,";
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

    var $adhesion = $('#adhesion');
    setColumnTemplate($adhesion, GRUMPIES.adhesionShort);
    setColumnTemplate2($adhesion, GRUMPIES.adhesionLong);

    var $hamburgefonstiv = $('#hamburgefonstiv');
    setColumnTemplate($hamburgefonstiv, GRUMPIES.hamburgefonstivShort);
    setColumnTemplate2($hamburgefonstiv, GRUMPIES.hamburgefonstivLong);

    var $caps = $('#caps');
    setColumnTemplate2($caps, GRUMPIES.caps);
    
    var $allcaps = $('#allcaps');
    setColumnTemplate2($allcaps, GRUMPIES.allcaps);

    var hints_caps = $('.hints-caps');
    var hints_numbers = $('.hints-numbers');
    var hints_lower = $('.hints-lower');
    hints_lower.html(hints_lower.html() + hintsLower);
    hints_caps.html(hints_caps.html() + hintsCaps);
    hints_numbers.html(hints_numbers.html() + hintsNumbers);
}