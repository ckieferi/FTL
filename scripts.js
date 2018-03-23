$(function() {
    function registerMailchimp(endpoint, data) {
        $.ajax({
            url: "signup.php",
            type: "POST",
            data: data,
            success: function(data) {
                console.log("in der registerMailchimp Funktion");
                console.log(endpoint);
                console.log(data.result);
                console.log(data.msg);
                console.log("in der registerMailchimp Funktion ENDE");
            }
        });
    }

    window.registerMailchimp = registerMailchimp;

    function sendEmail(endpoint, options) {
        $.ajax({
            url: endpoint,
            data: options,
            method: "POST"
        });
        console.log("email sent");
    }

    window.sendEmail = {};

    var form = $("form.contact-form");
    var values = function() {
        return {
            email: form.find('input[name="email"]').val(),
            firstName: form.find('input[name="lastName"]').val(),
            lastName: form.find('input[name="firstName"]').val(),
            company: form.find('input[name="firma"]').val(),
            message: form.find('textarea[name="message"]').val(),
            newsletter: form.find('input:checked[name="newsletter"]').val(),
            cities: form.find('input:checked[name="stadt[]"]').map(function(){ return $(this).val(); }).get().join(","),
        };
    };
    var validateEmail = function(email) {
        var re;
        re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    };
    return form.on("submit", function(e) {
        console.log("form submit");
        var data;
        e.preventDefault();
        data = values();
        $("*", form).removeClass("has-error");
        if (!validateEmail(data.email)) {
            form.find('input[type="email"]').addClass("has-error");
            return;
        }
        if (data.newsletter == "true") {
            console.log("registerMailchimp request start");
            registerMailchimp(form.find('input[name="mcEndpoint"]').val(), {
                "first_name": data.firstName,
                "last_name": data.lastName,
                "email_address": data.email,
                "company": data.company,
                "message": data.message,
                "cities": data.cities
            });
        }

        sendEmail(form.find('input[name="emEndpoint"]').val(), {
            firstName: data.firstName,
            lastName: data.lastName,
            email: data.email,
            message: data.message
        });
        form.html("");
        return $(".success").removeClass("hidden");
    });
});

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93044899-1', 'auto');
  ga('send', 'pageview');
