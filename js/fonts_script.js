$(document).ready(function() {
    var $element = $('#bubble');
    var phrases = [
        'leader.uz',
        
        /*'Мы  используем  самые  качественные  материалы  и  работы  осуществляются  теми,  кто  являются  профессионалами  высочайшего  класса.',*/
        'leader.uz',
        /*'Regards,',
        'Guedes, Washington L.',*/
    ];
    var index = -1;
    (function loopAnimation() {
        index = (index + 1) % phrases.length;
        bubbleText({
            element: $element,
            newText: phrases[index],
            letterSpeed: 500,
            callback: function() {
                setTimeout(loopAnimation, 1000);
            },
        });
    })();
});

