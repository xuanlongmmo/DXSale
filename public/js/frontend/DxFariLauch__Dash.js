function stt__btn() {
    var box__body = document.getElementById('box__body');
    var stt__btn = document.getElementById('stt__btn');
    box__body.onmouseover = function() {
        box__body.style.opacity = '0.7';
        stt__btn.innerHTML = 'Click for deails';
    }
    box__body.onmouseout = function() {
        box__body.style.opacity = '1';
        stt__btn.innerHTML = 'Launch Success';
    }
}
stt__btn();

function copy__qr() {
    var copyText = document.getElementById('qr__copy');
    var notify__qr = document.getElementById('notify__qr');
    copyText.select();
    document.execCommand('copy');
    console.log('Copied Text');
    notify__qr.style.display = 'block';
    setTimeout(function(){
        notify__qr.style.display = 'none';
    }, 50);
}

function check__ac() {
    var root__check = document.getElementById('root__check');
    var btn__active = $('.DxFarilxDash__box-modal-footer-btn.btn.btn--diss.success');

    if(root__check.checked == true) {
        btn__active.addClass('active');
    } else {
        btn__active.removeClass('active');
    }
}

function modal__ac(e) {
    var id = e.id;
    var arrid = id.split('__');
    id = arrid[arrid.length - 1];
    var modal__box = document.getElementById('modal__box');
    var modal__note = document.getElementById('modal__note');
    var modal__note__overlay =  document.getElementById('modal__note__overlay');
    var modal__note__body = document.getElementById('modal__note__body');
    var dxdash__first = document.getElementById('dxdash__first');
    var dxdash__second =  document.getElementById('dxdash__second');
    var dxdash__first__active = document.getElementById('dxdash__first__active');
    $('.disclaimerco').attr('id', 'disclaimerco__'+id);
    $('.DxFarilxDash__box-modal-footer-btn.btn.btn--diss.success').attr('id', 'modalsuccess__'+id);

    if (modal__box.checked == 0) {
        modal__note.style.display =  'flex';
        modal__note__overlay.style.display = 'block';
        modal__note__body.style.display ='block';
        dxdash__first.style.display = 'none';
        dxdash__second.style.display = 'block';
        dxdash__first__active.style.display = 'none';
    } else {
        modal__note.style.display =  'none';
        modal__note__overlay.style.display = 'none';
        modal__note__body.style.display ='none';
    }
}

function hidemodal() {
    var modal__note = document.getElementById('modal__note');
    var modal__note__overlay =  document.getElementById('modal__note__overlay');
    var modal__note__body = document.getElementById('modal__note__body');
    modal__note.style.display =  'none';
    modal__note__overlay.style.display = 'none';
    modal__note__body.style.display ='none';
}

function modal__second(e) {
    var id = e.id;
    var arrid = id.split('__');
    id = arrid[arrid.length - 1];
    var dxdash__second = document.getElementById('dxdash__second');
    var btn__active = $('.DxFarilxDash__box-modal-footer-btn.btn.btn--diss.success');
    var modal__note =  document.getElementById('modal__note');
    var dxdash__thrid  = document.getElementById('dxdash__thrid');
    var dxdash__first__active = document.getElementById('dxdash__first__active');
    var dxdash__first__active__btn = document.getElementById('dxdash__first__active__btn');

    if (btn__active.hasClass('active')) {
        dxdash__second.style.display = 'none';
        modal__note.style.display = 'none';
        dxdash__thrid.style.display = 'block';
        dxdash__first__active.style.display = 'flex';
        dxdash__first__active.style.justifyContent = 'space-between';
        dxdash__first__active.style.flexDirection = 'column';
        dxdash__first__active__btn.style.marginTop = '10px';
        appendiew(id);
    }
}

function appendiew(id) {
    $(document).ready(function(){
        $.ajax({
            url:"detaildxlaunch",
            method:'get',
            data: {
                id:id,
            },
            success: function(data){
                $('#dxdash__thrid__content').remove();
                $('#dxdash__thrid').append(data);
            },
        });
    });
}

function show__second() {
    var dxdash__second = document.getElementById('dxdash__second');
    var dxdash__first = document.getElementById('dxdash__first');

    dxdash__second.style.display = 'block';
    dxdash__first.style.display = 'none'
       
}

function show__fourth() {
    var dxdash__fourth =  document.getElementById('dxdash__fourth');
    var dxdash__thrid  = document.getElementById('dxdash__thrid');

    dxdash__fourth.style.display = 'block';
    dxdash__thrid.style.display = 'none'

}

//copy
function copy__lick__lock() {
    var copyText = document.getElementById('copy__lick__lock');
    var modal__copy__div = document.getElementById('modal__copy__div');
    copyText.select();
    document.execCommand('copy');
    modal__copy__div.style.display = 'flex';
    setTimeout(function(){
        modal__copy__div.style.display = 'none';
    }, 1000);
}