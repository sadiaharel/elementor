class Box {
        constructor(id){
            this.id = id;
        }
        getButtonId (id){
    
        }
        setButtonText (text){
            this.text = text;
        }
        getButtonText (){
            $.ajax({url: `index.php?action=get_box_text&box_id=${this.id}`, success: (result) => {
                var data = JSON.parse(result)
                console.log(data)
                this.setButtonText(data.data);
                $('.popup-background').removeClass('hide');
                $('#popup-title').text(this.text);
    }});
    }   

}




$( document ).ready(function() {
    const popoverBackground =$('.popup-background');
    const popover =$('.popup');
    const closeBtn = popoverBackground.find('.close');

    popoverBackground.on('click', function(){
        $(this).addClass('hide');
    });
    popover.on('click', function(e){
        e.stopPropagation();
    });
    closeBtn.on('click', function(e){
        popoverBackground.addClass('hide');
    });

});

function onBoxClick(id){
    var item =  new Box(id);
    item.getButtonText();
}
