<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/day1.css">
    <title>Xena Keyboard</title>
</head>
<body>
<br>
<br>
<br>

<h1>Xena Keyboard!</h1>
<div class="keys">
    <div data-key="65" class="key">
        <kbd>A</kbd>
        <span class="sound">warrior cry</span>
    </div>
    <div data-key="83" class="key">
        <kbd>S</kbd>
        <span class="sound">theme song</span>
    </div>
    <div data-key="68" class="key">
        <kbd>D</kbd>
        <span class="sound">fun yet?</span>
    </div>
    <div data-key="70" class="key">
        <kbd>F</kbd>
        <span class="sound">I won't work for you</span>
    </div>
    <div data-key="71" class="key">
        <kbd>G</kbd>
        <span class="sound">boo</span>
    </div>
    <div data-key="72" class="key">
        <kbd>H</kbd>
        <span class="sound">fight now, talk later</span>
    </div>
    <div data-key="74" class="key">
        <kbd>J</kbd>
        <span class="sound">getting the girl</span>
    </div>
    <div data-key="75" class="key">
        <kbd>K</kbd>
        <span class="sound">good guys</span>
    </div>
    <div data-key="76" class="key">
        <kbd>L</kbd>
        <span class="sound">snowball's chance</span>
    </div>
</div>

<audio data-key="65" src="xena/WarriorCry.mp3"></audio>
<audio data-key="83" src="xena/ThemeSong.mp3"></audio>
<audio data-key="68" src="xena/FunYet.mp3"></audio>
<audio data-key="70" src="xena/WontWorkForYou.mp3"></audio>
<audio data-key="71" src="xena/Boo.mp3"></audio>
<audio data-key="72" src="xena/FightNowTalkLater.mp3"></audio>
<audio data-key="74" src="xena/GettingTheGirl.mp3"></audio>
<audio data-key="75" src="xena/GoodGuys.mp3"></audio>
<audio data-key="76" src="xena/SnowballsChance.mp3"></audio>

<script>

    
    function playSound(e) {
            const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
            const key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
            if(!audio) return;
            audio.currentTime = 0;
            audio.play();
            key.classList.add('playing');
        }

    function removeTransition(e) {
        if(e.propertyName !== 'transform') return;
        this.classList.remove('playing');
    }

    const keys = document.querySelectorAll('.key');
    keys.forEach(key => key.addEventListener('transitionend', removeTransition));

    window.addEventListener('keydown', playSound);

</script>

</body>
</html>