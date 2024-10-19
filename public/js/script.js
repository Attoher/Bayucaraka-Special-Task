document.addEventListener("DOMContentLoaded", function() {
    const fadeElements = document.querySelectorAll('.fade-in');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                entry.target.classList.remove('fade-out');
            } else {
                entry.target.classList.add('fade-out');
                entry.target.classList.remove('visible');
            }
        });
    }, observerOptions);

    fadeElements.forEach(element => {
        observer.observe(element);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const headingElement = document.getElementById("timeline-heading");
    const text = "Timelines";
    let index = 0;
    let typingSpeed = 100;
    let resetDelay = 30000;
    let isTyping = false;

    function type() {
        if (index < text.length) {
            headingElement.textContent += text.charAt(index);
            index++;
            setTimeout(type, typingSpeed);
        } else {
            setTimeout(reset, resetDelay);
        }
    }

    function reset() {
        headingElement.textContent = "";
        index = 0;
        setTimeout(type, 500);
    }

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !isTyping) {
                isTyping = true;
                type();
            } else if (!entry.isIntersecting) {
                isTyping = false;
                reset();
            }
        });
    }, observerOptions);

    observer.observe(headingElement);
});
document.addEventListener("DOMContentLoaded", function () {
    const teamMembers = document.querySelectorAll('.team-member');
    
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, index * 300);
            } else {
                entry.target.classList.remove('visible');
            }
        });
    }, observerOptions);

    teamMembers.forEach(member => {
        observer.observe(member);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const divisions = document.querySelectorAll('.text-center');
    
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible');
            }
        });
    }, observerOptions);

    divisions.forEach(division => {
        observer.observe(division);
    });
});
