/* ########################### */
/* Календарик */
/* ########################### */
$.datepicker.setDefaults({
     dateFormat: 'dd.mm'
});

$(".datepicker").each(function(){
    $(this).datepicker({
		minDate: 0,
		numberOfMonths: [1,1],
		beforeShowDay: function(date) {
			var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $(this).parent().find(".inputdatefrom").val());

			var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $(this).parent().find(".inputdateto").val());

			return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
		},
		onSelect: function(dateText, inst) {
			var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $(this).parent().find(".inputdatefrom").val());

			var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $(this).parent().find(".inputdateto").val());

            var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);

            if (!date1 || date2) {
                date1 = dateText;
				$(this).parent().find(".inputdatefrom").val(dateText);
                $(this).parent().find(".datefrom").text(dateText);

				$(this).parent().find(".inputdateto").val("");
                $(this).parent().find(".dateto").text(dateText);

                $(this).datepicker();
            } else if( selectedDate < date1 ) {
                date1 = dateText;
                date2 = dateText;
                $(this).parent().find(".inputdateto").val( $(this).parent().find(".inputdatefrom").val() );
                $(this).parent().find(".dateto").val( $("#input1").val() );

                $(this).parent().find(".inputdatefrom").val( dateText );
                $(this).parent().find(".datefrom").text( dateText );

                $(this).datepicker();
            } else {
                date2 = dateText;
				$(this).parent().find(".inputdateto").val(dateText);
                $(this).parent().find(".dateto").text(dateText);

                $(this).datepicker();
			}

            leftinfo();
		}
	});
});

$("[data-dateopen]").click(function(event){
    event.stopPropagation();
    var cal = $(this).data("dateopen");
    $("#"+cal).toggleClass("visible");
});

$(".datepicker").click(function(event){
    event.stopPropagation();
});

$("html").click(function(){
    $(".datepicker").removeClass("visible");
});


/* ########################### */
/* Информация в левой колонке */
/* ########################### */

function leftinfo() {
    var typedata;
    var target = $(".technics__summary-list");
    target.html("");

    $("[data-leftinfo]").each(function(){
        // правило для селектов
        if ($(this).is("select")) {
            typedata = $(this).val();
        }

        // для радиокнопок
        if ($(this).is("input[type='radio']")) {
            var name = $(this).attr("name");
            typedata = $("[name='"+name+"']:checked").val();
        }

        // для слайдера
        if ($(this).is(".slider")) {
            var dataname = $(this).data("left-name");
            var data1 = $(this).parent().find(".number_from").val();
            var data2 = $(this).parent().find(".number_to").val();
            typedata = data1+"-"+data2+" "+dataname;
        }

        // для календаря
        if ($(this).is(".datepicker")) {
            var date1 = $(this).parent().find(".datefrom").text();
            var date2 = $(this).parent().find(".dateto").text();
            typedata = "С "+date1+" по "+date2;
        }

        // выводим данные
        target.append("<li>"+typedata+"</li>");
    });
}

leftinfo();

$("input").change(function(){
    leftinfo();
});