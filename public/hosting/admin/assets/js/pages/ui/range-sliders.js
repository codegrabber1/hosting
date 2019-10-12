$(function () {
    //Taken from http://ionden.com/a/plugins/ion.rangeSlider/demo.html

    $("#price").ionRangeSlider({
        skin: "round",
        grid: true,
        min: 0,
        max:10000,
        //step: 10,
        prefix: "$"
    });

    $("#disc_space").ionRangeSlider({
        skin: "round",
        grid: true,
        min: 0,
        max:10000,
        step: 10,
        postfix: " Mb"
    });

    $("#php_versions").ionRangeSlider({
        type: "double",
        skin: "round",
        grid: true,
        from: 2,
        to: 5,
        values: [5.3, 5.4, 5.5, 5.6, 7.0, 7.1, 7.2, 7.3]
    });

    $('#php_memory').ionRangeSlider({
        skin: "round",
        grid: true,
        min: 0,
        max: 500,
        step: 1,
        postfix: " Mb"
    });

    $("#dom_subdom").ionRangeSlider({
        skin: "round",
        grid: true,
        min: 0,
        max: 1000,
        from: 2,
        step: 1
    });
    $('#ftp').ionRangeSlider({
        skin: "round",
        grid: true,
        min: 0,
        max: 100,
        from: 2,
        step: 1
    });
    $('#db').ionRangeSlider({
        skin: "round",
        grid: true,
        min: 0,
        max: 100,
        from: 2,
        step: 1
    });
    $('#emails').ionRangeSlider({
        skin: "round",
        grid: true,
        min: 0,
        max: 100,
        from: 2,
        step: 1
    });

    $("#range_03").ionRangeSlider({
        type: "double",
        grid: true,
        min: 0,
        max: 1000,
        from: 200,
        to: 800,
        prefix: "$"
    });

    $("#range_04").ionRangeSlider({
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500
    });

    $("#range_05").ionRangeSlider({
        type: "double",
        grid: true,
        min: -1000,
        max: 1000,
        from: -500,
        to: 500,
        step: 250
    });


    $("#range_06").ionRangeSlider({
        type: "double",
        grid: true,
        min: -12.8,
        max: 12.8,
        from: -3.2,
        to: 3.2,
        step: 0.1
    });

    $("#range_07").ionRangeSlider({
        type: "double",
        grid: true,
        from: 1,
        to: 5,
        values: [0, 10, 100, 1000, 10000, 100000, 1000000]
    });


    $("#range_08").ionRangeSlider({
        grid: true,
        from: 5,
        values: [
            "zero", "one",
            "two", "three",
            "four", "five",
            "six", "seven",
            "eight", "nine",
            "ten"
        ]
    });

    $("#range_09").ionRangeSlider({
        grid: true,
        from: 3,
        values: [
            "January", "February", "March",
            "April", "May", "June",
            "July", "August", "September",
            "October", "November", "December"
        ]
    });

    $("#range_10").ionRangeSlider({
        grid: true,
        min: 1000,
        max: 1000000,
        from: 100000,
        step: 1000,
        prettify_enabled: false
    });
});