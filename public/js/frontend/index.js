function ope(e){
    var father = $('#'+e.id);
    var son = $('#'+e.id+'_son');
    var up = $('#'+e.id+'_up');
    var down = $('#'+e.id+'_down');

    if (!father.hasClass('expanded')) {
        reset();
    }

    if (son.hasClass('none')) {
        reset();
        son.removeClass('none');
        up.removeClass('none');
        down.addClass('none');
        $('#'+e.id+' .home__nav-item-title').addClass('active_div');
        $('#svg'+e.id).css('fill', '#2196f3');
    } else {
        son.addClass('none');
        down.removeClass('none');
        up.addClass('none');
        $('#'+e.id+' .home__nav-item-title').removeClass('active_div');
        $('#svg'+e.id).css('fill', '#757575');
    }
}

function autoopen(id, li){
    var father = $('#'+id);
    var son = $('#'+id+'_son');
    var up = $('#'+id+'_up');
    var down = $('#'+id+'_down');

    reset();
    son.removeClass('none');
    up.removeClass('none');
    down.addClass('none');
    $('#'+id+' .home__nav-item-title').addClass('active_div');
    $('#'+id+' .home__nav-item-link').addClass('active_div');
    $('#svg'+id).css('fill', '#2196f3');

    if (li !== '') {
        $('#'+li).addClass('active_li');
    }
}

function reset(){
    var a = document.getElementsByClassName('home__nav-son');
    var up = document.getElementsByClassName('fa-chevron-up');
    var down  = document.getElementsByClassName('fa-chevron-down');
    var itemtitle  = document.getElementsByClassName('home__nav-item-title');
    var itemlink  = document.getElementsByClassName('home__nav-item-link');
    for(var i = 0;i < a.length;i++){
        a[i].classList.add("none");
        $('#svgtd'+i).css('fill', '#757575');
        itemtitle[i].classList.remove("active_div");
    }

    for(var i = 0;i < up.length;i++){
        up[i].classList.add("none");
    }

    for(var i = 0;i < down.length;i++){
        down[i].classList.remove("none");
    }

    for(var i = 0;i < itemlink.length;i++){
        itemlink[i].classList.remove("active_div");
    }
}

// nav__
function compact() {
    var check = document.getElementById('slider');
    var element = document.getElementById('sliderxbox');
    var title = document.getElementById('home__nav__i4');
    var s = document.getElementsByClassName('home__nav-item');
    var stt = document.getElementsByClassName('home__nav-item-title-icon');
    var nav__scroll = document.getElementById('nav__scroll');
    var body = document.getElementById('home__content');

    if (check.checked == true) {
        element.classList.add('compact');
        body.classList.add('compact');
        for (let index = 1; index <= s.length; index++) {
            document.getElementById('name'+index).style.display = 'none';
        }
        for (let index = 1; index <= stt.length; index++) {
            document.getElementById('stt'+index).style.display = 'none';
        }
        title.style.display = 'none';
        nav__scroll.style.padding = '100px 0 0 0';
    } else {
        body.classList.remove('compact');
        element.classList.remove('compact');
        for (let index = 1; index <= s.length; index++) {
            document.getElementById('name'+index).style.display = 'unset';
        }
        for (let index = 1; index <= stt.length; index++) {
            document.getElementById('stt'+index).style.display = 'unset';
        }
        title.style.display = 'flex';
        nav__scroll.style.padding = 'unset';
    }

}

$(document).ready(function () {
    $('.home__nav ul li ul').find('li').click(function () {
        //removing the previous selected menu state
        $('.home__nav').find('li.active').removeClass('active');
        //adding the state for this parent menu
        $(this).parents('li').addClass('active');
    });
});


// select

$('select').each(function () {
    // Cache the number of options
    var $this = $(this),
        numberOfOptions = $(this).children('option').length;
  
    // Hides the select element
    $this.addClass('s-hidden');
  
    // Wrap the select element in a div
    $this.wrap('<div class="select"></div>');
  
    // Insert a styled div to sit over the top of the hidden select element
    $this.after('<div class="styledSelect"></div>');
  
    // Cache the styled div
    var $styledSelect = $this.next('div.styledSelect');
  
    // Show the first select option in the styled div
    $styledSelect.text($this.children('option').eq(0).text());
  
    // Insert an unordered list after the styled div and also cache the list
    var $list = $('<ul />', {
        'class': 'options'
    }).insertAfter($styledSelect);
  
    // Insert a list item into the unordered list for each select option
    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }
  
    // Cache the list items
    var $listItems = $list.children('li');
  
    // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
    $styledSelect.click(function (e) {
        // var drop__select__bb = document.getElementById('drop__select__bb');
        // select__contro.css('backgroud','red');
        // drop__select__bb.css('border-bottom','1px solid red');
        e.stopPropagation();
        $('div.styledSelect.active').each(function () {
            $(this).removeClass('active').next('ul.options').hide();
        });
        $(this).toggleClass('active').next('ul.options').toggle();
    });
  
    // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
    // Updates the select element to have the value of the equivalent option
    $listItems.click(function (e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        var tab__show__1 = $('#tab__show__1');
        var tab__show__2 = $('#tab__show__2');
        if ($this.val() == 1 ) {
          tab__show__1.css('display', 'block');
          tab__show__2.css('display', 'none');
        } else {
          tab__show__2.css('display', 'block');
          tab__show__1.css('display', 'none');
          
        }
        /* alert($this.val()); Uncomment this for demonstration! */
    });
  
    // Hides the unordered list when clicking outside of it
    $(document).click(function () {
        $styledSelect.removeClass('active');
        $list.hide();
    });
  
  });
