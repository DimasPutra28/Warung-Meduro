(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });

})(jQuery);

// js chat
document.addEventListener("DOMContentLoaded", function () {
    const chatContainer = document.getElementById("chat-container");
    const chatawal = document.getElementById("chat-awal");
    const chatMessages = document.getElementById("chat-messages");
    const userInput = document.getElementById("user-input");
    const sendButton = document.getElementById("send-button");

    const questionsAndAnswers = {
        "halo": "Halo! Bagaimana saya bisa membantu?",
        "siapa kamu": "Saya adalah bot percakapan sederhana.",
        "apa kabar": "Saya hanya sebuah program, jadi saya tidak punya perasaan, tetapi saya siap membantu Anda!",
        "terima kasih": "Sama-sama! Jangan ragu untuk bertanya lagi jika Anda membutuhkan bantuan lebih lanjut.",
        "belanja": "Apakah Anda ingin [berbelanja](/shop)?"
      };

      function generateBotResponse(message) {
        const lowerCaseMessage = message.toLowerCase();
        const botResponse = questionsAndAnswers[lowerCaseMessage] || "Maaf, saya tidak mengerti pertanyaan Anda.";

        const botMessageElement = document.createElement("div");
        botMessageElement.className = "message received-message";
        botMessageElement.innerHTML = marked(botResponse); // Menggunakan marked.js untuk merender Markdown
        chatBox.appendChild(botMessageElement);
        chatBox.scrollTop = chatBox.scrollHeight;
      }


      // Memeriksa apakah riwayat chat tersimpan di localStorage
    //     if (localStorage.getItem("chatHistory")) {
    // chatMessages.innerHTML = localStorage.getItem("chatHistory");
    // }

    sendButton.addEventListener("click", function () {
      const userMessage = userInput.value;
      if (userMessage.trim() !== "") {
        displayUserMessage(userMessage);
        simulateBotReply(userMessage);
        userInput.value = "";
        // Menyimpan riwayat chat ke localStorage
      // localStorage.setItem("chatHistory", chatMessages.innerHTML);
      }
    });



    function displayUserMessage(message) {
      const userMessageElement = document.createElement("div");
      userMessageElement.className = "user-message";
      userMessageElement.textContent = message;
      chatMessages.appendChild(userMessageElement);
    }

    function displayBotMessage(message) {
      const botMessageElement = document.createElement("div");
      botMessageElement.className = "bot-message";
      botMessageElement.textContent = message;
      chatMessages.appendChild(botMessageElement);
    }



    function simulateBotReply(userMessage) {
      const lowercaseUserMessage = userMessage.toLowerCase();
      let botReply = "Maaf, saya tidak mengerti.";

      for (const question in questionsAndAnswers) {
        if (lowercaseUserMessage.includes(question)) {
          botReply = questionsAndAnswers[question];
          break;
        }
      }

      displayBotMessage(botReply);
    }
  });

  




