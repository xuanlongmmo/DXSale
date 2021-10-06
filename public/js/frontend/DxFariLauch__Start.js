$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

function dxf__Start__modal() {
    var modal__dxf__start__input = document.getElementById('modal__dxf__start__input');
    var modal__dxf__start__note = document.getElementById('modal__dxf__start__note');
    var modal__dxf__start__note__overlay = document.getElementById('modal__dxf__start__note__overlay');
    var modal__dxf__start__note__body = document.getElementById('modal__dxf__start__note__body');

    if (modal__dxf__start__input.checked == 0) {
        modal__dxf__start__note.style.display = 'block';
        modal__dxf__start__note.style.display = 'flex'
        modal__dxf__start__note__overlay.style.display = 'block';
        modal__dxf__start__note__body.style.display = 'block';
    } else {
        modal__dxf__start__note.style.display = 'none';
        modal__dxf__start__note__overlay.style.display = 'none';
        modal__dxf__start__note__body.style.display = 'none';
    }
}

function dxf__start__check__root() {
    if($('#dxfs__root__check10').is(":checked") == false) {
        $('.DxFarilxDash__start-root-input').each(function(){ this.checked = false; });
        $('#dxf__start__btn').removeClass('active');
    } else {
        $('.DxFarilxDash__start-root-input').each(function(){ this.checked = true; });
        $('#dxf__start__btn').addClass('active');
    }
}

function dxf__start__sencond () {
    var dxf__start__first = document.getElementById('dxf__start__first');
    var modal__dxf__start__note = document.getElementById('modal__dxf__start__note');
    var dxf__start__second = document.getElementById('dxf__start__second');
    var dxf__start__btn = document.getElementById('dxf__start__btn');

    if (dxf__start__btn.classList.contains('active')) {
        dxf__start__first.style.display = 'none';
        modal__dxf__start__note.style.display = 'none';
        dxf__start__second.style.display = 'block';
    }
}

// function dxf__start__sencond () {
//     var dxf__start__first = document.getElementById('dxf__start__first');
//     var modal__dxf__start__note = document.getElementById('modal__dxf__start__note');
//     var dxf__start__login = document.getElementById('dxf__start__login');
//     var dxf__start__nologin = document.getElementById('dxf__start__nologin');
//     var dxf__start__btn = document.getElementById('dxf__start__btn');
//     var check = getAccount();

//     if (dxf__start__btn.classList.contains('active')) {
//         dxf__start__first.style.display = 'none';
//         modal__dxf__start__note.style.display = 'none';

//         console.log(check);
//         if (check == 'undefined') {
//             dxf__start__nologin.style.display = 'block';
//         } else {
//             dxf__start__login.style.display = 'block';
//         }
//     }
// }

function showximport(e) {
    var id = e.id;
    var son = document.getElementById(id+'__son');
    var hot = document.getElementById(id+'__hot');
    
    if (son.classList.contains('none')) {
        showximport__reset();
        son.classList.remove('none');
    } 
    else {
        son.classList.add('none');
    }
}

function showximport__reset() {
    var showximport__class = document.getElementsByClassName('DxFarilxStart__import-son');

    for (var i = 0; i < showximport__class.length; i++) {
        showximport__class[i].classList.add('none');
    }
}

function to() {
    var btn = document.getElementById('DxFarilxStart__edit');
    var box = document.getElementById('form__control');
    var show__table = document.getElementById('show__table');

    btn.onclick = function() {
        var st1 = document.getElementById('DxFarilxStart__import__1__son');
        var st2 = document.getElementById('DxFarilxStart__import__8__son');
        st1.classList.remove('none');
        st2.classList.add('none');
        show__table.style.display = 'none';
        box.scrollIntoView();
    }
}
to();

function btn__next(e, arrcheck) {
    var id = e.id;
    var box = id.split('__');
    var box__get = document.getElementById(box[0]+'__'+box[1]+'__'+box[2]+'__son');
    var idnext = Number(box[2]) + 1;
    var box__next = document.getElementById(box[0]+'__'+box[1]+'__'+idnext+'__son');
    if (arrcheck.length > 0) {
        for (let index = 0; index < arrcheck.length; index++) {
            var checkok = checkvalidate(arrcheck[index]);
            if (checkok == false) {
                break;
            }
        };
        if (checkok == true) {
            if (!box__get.classList.contains('none')) {
                box__get.classList.add('none');
                box__next.classList.remove('none');
            }
        }
    } else {
        if (!box__get.classList.contains('none')) {
            box__get.classList.add('none');
            box__next.classList.remove('none');
        }
    }
}

function btn__prev(e) {
    var id = e.id;
    var box = id.split('__');
    var box__get = document.getElementById(box[0]+'__'+box[1]+'__'+box[2]+'__son');
    var idprev = Number(box[2]) - 1;
    var box__prev = document.getElementById(box[0]+'__'+box[1]+'__'+idprev+'__son');
    
    if (!box__get.classList.contains('none')) {
        box__get.classList.add('none');
        box__prev.classList.remove('none');
    }
}

function checkvalidate(value) {
    if (value == 'token') {
        let count = $('#'+value).val().length;
        if (count > 42 || count < 42) {
            alert('Your Token address # is an invalid Address!');
            return false;
        }
    }

    if (value == 'token_name') {
        let count = $('#'+value).val();
        if (count == '') {
            alert('Your token name required!');
            return false;
        }
    }

    if (value == 'token_symbol') {
        let count = $('#'+value).val();
        if (count == '') {
            alert('Your token symbol required!');
            return false;
        }
    }

    if (value == 'token_decimal') {
        let count = $('#'+value).val();
        if (count == '') {
            alert('Your token decimal required!');
            return false;
        }
    }

    if (value == 'soft') {
        let check = $('#'+value).val();
        if (check == '' || check < 1 || check % 1 !== 0) {
            alert('Your soft cap is not set correctly it must be a positive integer greater than or equal to 1. Please fix to proceed.');
            return false;
        }
    }

    if (value == 'hard') {
        let check = $('#'+value).val();
        let soft = $('#soft').val();;
        if (check == '' || check <= 0 || check % 1 !== 0) {
            alert("Your hard cap can't be 0, negative or empty! It must also be a whole number! Please fix to proceed");
            return false;
        } else if(Number(check) <= Number(soft)) {
            alert("Hard cap must be higher than soft cap. Please fix to proceed");
            return false;
        }
    }

    if (value == 'liquidity') {
        let check = $('#'+value).val();
        if (check == '' || check % 1 !== 0) {
            alert('Uniswap liquidity must be a whole number');
            return false;
        } else if(Number(check) <= 51) {
            alert("The liquidity amount needs to be a number >= 51!");
            return false;
        } else if(Number(check) > 100) {
            alert("The liquidity amount needs to be a number <= 100!");
            return false;
        }
    }
    return true;
}


function checkdate(checkval ,value, checktime) {
    $(document).ready(function(){
        $.ajax({
            url:"checkdate",
            method:'get',
            data: {
                value:value,
                checkval:checkval,
                checktime:checktime,
            },
            success: function(data){
                if (data == true) {
                    $('#check'+checkval).attr('checked', true);
                } else {
                    alert(data);
                    $('#check'+checkval).attr('checked', false);
                }
            },
        });
    });
}

function show__table() {
    var show__table = document.getElementById('show__table');

    var start = $('#start').val();
    var end = $('#end').val();
    var lock = $('#lock').val();
    
    checkdate('start', start, '');
    if (checktimeok('start') == false) {
        return false;
    }

    checkdate('end', end, start);
    if (checktimeok('end') == false) {
        return false;
    }

    checkdate('lock', lock, end);
    if (checktimeok('lock') == false) {
        return false;   
    }

    show__table.style.display = 'block';
    $('#DxFarilxStart__import__8__son').addClass('none');
}

function checktimeok(val) {
    var check = $('#check'+val).is(":checked");

    if (check == false) {
        return false;
    }

    return true;
}

function setvalue(e) {
    var id = e.id;
    var input = $('#'+id).val();
    if (id == 'start' || id == 'end' || id == 'lock') {
        var val = $('#'+id).val();
        converttime(id, val);
    } else {
        $('#value_'+id).html(input);
    }
}

function converttime(id, value) {
    $(document).ready(function(){
        $.ajax({
            url:"converttime",
            method:'get',
            data: {
                value:value,
            },
            success: function(data){
                $('#value_'+id).html(data);
            },
        });
    });
}

function openfinish() {
    var show__table = document.getElementById('show__table');
    if (show__table.style.display == 'none') {
        show__table.style.display = 'block';
        $('#DxFarilxStart__import__8__son').addClass('none');
    } else {
        show__table.style.display = 'none';
        $('#DxFarilxStart__import__8__son').addClass('block');
    }
}