$(document).ready(function () {


    $(".cbalink").css({
        display:"none",
    })




    $('.authorize').click(function () {
        $('#modal').fadeIn();
    })
    $('.close').click(function () {
        $('#modal').fadeOut();
    })

    var qty2 = document.getElementById("qty2");

    function decrementValue() {

        if (!isNaN(qty2.value) && qty2.value > 0) {

            qty2.value--;

        }

    }

    function incrementValue() {

        if (!isNaN(qty2.value)) {

            qty2.value++;

        }

    }
});
function futu_alert(header, text, close, className) {
    /* если div с ID == futu_alerts_holder не найден
     * (окошко вызывается впервые), то создаем необходимые div'ы
    */
    if (!document.getElementById('futu_alerts_holder')) {

        var futuAlertOuter = document.createElement('div');
        futuAlertOuter.className = 'futu_alert_outer';
        document.body.appendChild(futuAlertOuter);

        var futuAlertFrame = document.createElement('div');
        futuAlertFrame.className = 'frame';
        futuAlertOuter.appendChild(futuAlertFrame);

        var futuAlertsHolder = document.createElement('div');
        futuAlertsHolder.id = 'futu_alerts_holder';
        futuAlertsHolder.className = 'futu_alerts_holder';
        futuAlertFrame.appendChild(futuAlertsHolder);
    }else{
        $('.futu_alert_outer').fadeIn();
    }
    // создаем div с необходимым типом окна
    var futuAlert = document.createElement('div');
    futuAlert.className = 'futu_alert ' + className;
    document.getElementById('futu_alerts_holder').appendChild(futuAlert);
    futuAlert.id = 'futu_alert';

    // создаем div с заголовком окна
    var futuAlertHeader = document.createElement('div');
    futuAlertHeader.className = 'futu_alert_header';
    futuAlert.appendChild(futuAlertHeader);

    futuAlertHeader.innerHTML = header;

    // добавляем кнопку закрытия окна, если необходимо
    if (close) {
        var futuAlertCloseButton = document.createElement('a');
        futuAlertCloseButton.href = '#';
        futuAlertCloseButton.className = 'futu_alert_close_button';
        futuAlertCloseButton.onclick = function(ev) {
            if(!ev) {
                ev=window.event;
            }
            if (!document.all) ev.preventDefault(); else ev.returnValue = false;
            document.getElementById('futu_alerts_holder').removeChild(futuAlert);
        }
        futuAlert.appendChild(futuAlertCloseButton);

        var futuAlertCloseButtonIcon = document.createElement('img');
        // здесь не забывайте указать свой путь к пиктограмме закрытия окна
        futuAlertCloseButtonIcon.src = '/engine/plugins/bookmarks/img/btn_close.gif';
        futuAlertCloseButton.appendChild(futuAlertCloseButtonIcon);
    }

    // создаем div с текстом сообщения
    var futuAlertText = document.createElement('div');
    futuAlertText.className = 'futu_alert_text';
    futuAlert.appendChild(futuAlertText);


    futuAlertText.innerHTML = text;

    futuAlert.style.position = 'relative';
    futuAlert.style.top = '0';
    futuAlert.style.display = 'block';


    // если сообщение без кнопочки "Закрыть", то вызываем удаление окна через 3 секунды
    if (!close) {
        /* addEvent("click",function(){
        document.getElementById('futu_alerts_holder').removeChild(futuAlert);
        }, document.getElementById('futu_alert')); */
        setTimeout(function () {
            document.getElementById('futu_alerts_holder').removeChild(futuAlert);
            $('.futu_alert_outer').fadeOut();
            }, 3000);

    }
}
function addEvent(evType, fn, elem) {
    if (elem.addEventListener) {
        elem.addEventListener(evType, fn, false);
    }
    else if (elem.attachEvent) {
        elem.attachEvent('on' + evType, fn)
    }
    else {
        elem['on' + evType] = fn
    }
}
var qty2 = document.getElementById("qty2");

function decrementValue() {

    if (!isNaN(qty2.value) && qty2.value > 0) {

        qty2.value--;

    }

}

function incrementValue() {

    if (!isNaN(qty2.value)) {

        qty2.value++;

    }

}


