(function() {
    // Lista de colores llamativos en formato RGBA
    var colors = [
        'rgba(255, 0, 0, 1)',   // Rojo
        'rgba(255, 165, 0, 1)', // Naranja
        'rgba(255, 255, 0, 1)', // Amarillo
        'rgba(0, 255, 0, 1)',   // Verde
        'rgba(0, 0, 255, 1)',   // Azul
        'rgba(75, 0, 130, 1)',   // Índigo
        'rgba(238, 130, 238, 1)' // Violeta
    ];
    var end = Date.now() + (15 * 1000);

    function random(min, max) {
        return Math.random() * (max - min) + min;
    }

    function resetParticle(particle, width, height) {
        particle.color = colors[(Math.random() * colors.length) | 0];
        particle.color2 = colors[(Math.random() * colors.length) | 0];
        particle.x = Math.random() * width;
        particle.y = Math.random() * height - height;
        particle.diameter = Math.random() * 10 + 5;
        particle.tilt = Math.random() * 10 - 10;
        particle.tiltAngleIncrement = Math.random() * 0.07 + 0.05;
        particle.tiltAngle = Math.random() * Math.PI;
        return particle;
    }

    function toggleConfettiPause() {
        if (pause)
            resumeConfetti();
        else
            pauseConfetti();
    }

    function isConfettiPaused() {
        return pause;
    }

    function pauseConfetti() {
        pause = true;
    }

    function resumeConfetti() {
        pause = false;
        runAnimation();
    }

    function runAnimation() {
        if (pause)
            return;
        else if (particles.length === 0) {
            context.clearRect(0, 0, window.innerWidth, window.innerHeight);
            animationTimer = null;
        } else {
            var now = Date.now();
            var delta = now - lastFrameTime;
            if (!supportsAnimationFrame || delta > confetti.frameInterval) {
                context.clearRect(0, 0, window.innerWidth, window.innerHeight);
                updateParticles();
                drawParticles(context);
                lastFrameTime = now - (delta % confetti.frameInterval);
            }
            animationTimer = requestAnimationFrame(runAnimation);
        }
    }

    function startConfetti(timeout, min, max) {
        var width = window.innerWidth;
        var height = window.innerHeight;
        window.requestAnimationFrame = (function() {
            return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
                return window.setTimeout(callback, confetti.frameInterval);
            };
        })();
        var canvas = document.getElementById("confetti");
        if (!canvas) {
            canvas = document.createElement("canvas");
            canvas.setAttribute("id", "confetti");
            canvas.setAttribute("style", "display:block;z-index:999999;pointer-events:none;position:fixed;top:0");
            document.body.appendChild(canvas);
            canvas.width = width;
            canvas.height = height;
            window.addEventListener("resize", function() {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }, true);
            context = canvas.getContext("2d");
        } else if (context === null)
            context = canvas.getContext("2d");
        var count = confetti.maxCount;
        if (min) {
            if (max) {
                if (min == max)
                    count = particles.length + max;
                else {
                    if (min > max) {
                        var temp = min;
                        min = max;
                        max = temp;
                    }
                    count = particles.length + ((Math.random() * (max - min) + min) | 0);
                }
            } else
                count = particles.length + min;
        } else if (max)
            count = particles.length + max;
        while (particles.length < count)
            particles.push(resetParticle({}, width, height));
        streamingConfetti = true;
        pause = false;
        runAnimation();
        if (timeout) {
            window.setTimeout(stopConfetti, timeout);
        }
    }

    function stopConfetti() {
        streamingConfetti = false;
    }

    function removeConfetti() {
        stopConfetti();
        pause = false;
        particles = [];
    }

    function toggleConfetti() {
        if (streamingConfetti)
            stopConfetti();
        else
            startConfetti();
    }

    function isConfettiRunning() {
        return streamingConfetti;
    }

    function drawParticles(context) {
        var particle;
        var x;
        for (var i = 0; i < particles.length; i++) {
            particle = particles[i];
            context.beginPath();
            context.lineWidth = particle.diameter;
            context.strokeStyle = particle.color;
            x = particle.x + particle.tilt;
            context.moveTo(x + particle.diameter / 2, particle.y);
            context.lineTo(x, particle.y + particle.tilt + particle.diameter / 2);
            context.stroke();
        }
    }

    function updateParticles() {
        var width = window.innerWidth;
        var height = window.innerHeight;
        var particle;
        waveAngle += 0.01;
        for (var i = 0; i < particles.length; i++) {
            particle = particles[i];
            if (!streamingConfetti && particle.y < -15)
                particle.y = height + 100;
            else {
                particle.tiltAngle += particle.tiltAngleIncrement;
                particle.x += Math.sin(waveAngle);
                particle.y += (Math.cos(waveAngle) + particle.diameter / 2) * confetti.speed;
                particle.tilt = Math.sin(particle.tiltAngle) * 15;
            }
        }
    }

    var confetti = {
        maxCount: 150,
        speed: 1,  // Reducir la velocidad
        frameInterval: 15,
        alpha: 1.0,
        gradient: false,
        start: null,
        stop: null,
        toggle: null,
        pause: null,
        resume: null,
        togglePause: null,
        remove: null,
        isPaused: null,
        isRunning: null
    };

    confetti.start = startConfetti;
    confetti.stop = stopConfetti;
    confetti.toggle = toggleConfetti;
    confetti.pause = pauseConfetti;
    confetti.resume = resumeConfetti;
    confetti.togglePause = toggleConfettiPause;
    confetti.remove = removeConfetti;
    confetti.isPaused = isConfettiPaused;
    confetti.isRunning = isConfettiRunning;

    var supportsAnimationFrame = window.requestAnimationFrame ||
        window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    var streamingConfetti = false;
    var animationTimer = null;
    var pause = false;
    var lastFrameTime = Date.now();
    var particles = [];
    var waveAngle = 0;
    var context = null;

    document.addEventListener("DOMContentLoaded", function() {
        startConfetti();
    });
})();
