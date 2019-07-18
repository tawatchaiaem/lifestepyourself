<html>

<head>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Share+Tech|Share+Tech+Mono" rel="stylesheet" />
    <title>Designs by Laighlin</title>
</head>

<body onload="draw()">
    <canvas id="bg"></canvas>
    <main id="content">
        <h1>
            <div class="hex moved"></div><span>About the Dev</span></h1>
        <div class="subtext" id="main">
            <p>The name's Lin (which is short for Lindeun or Laighlin, depending on where you know me from). I'm a 24-year-old South Asian design student with a tech sort of background and a lot to say about the trends and direction of the contemporary design
                world.</p>
            <p>I wanted to be an engineer for most of my life. By the time I changed my mind about that, my liaison with the applied sciences had drastically altered my worldview already. This still informs much of my work and work ethic - design is no less
                of a science in my eyes than physics or computing. (In other words, I like design as long as I can be a nerd about it.)</p>
        </div>
        <h2>
            <div class="hex"></div><span>Skills</span></h2>
        <div class="subtext coll">
            A good grasp of object-oriented programming and computing-related math as a whole. Proficient in CSS3 and HTML5; making significant inroads into JavaScript and JQuery. Adobe Illustrator is both enjoyable for me and putty in my hands. <i>Putty.</i>            In addition to my knowledge of coding, I also speak five human languages and am in the process of learning a few more.
        </div>
        <h2>
            <div class="hex"></div><span>Hobbies & Interests</span></h2>
        <div class="subtext coll">
            Small indie coding projects (semi-professionally). Music (unprofessionally). Massively multiplayer online games (clumsily). Cooking (hungrily).
        </div>
        <h2>
            <div class="hex"></div><span>Currently Working On</span></h2>
        <div class="subtext coll">
            An accessibility app for Android, a couple of desktop themes for a blogging platform I casually use, and a photography project detailing the interplay of natural and artifical in urban environments.
        </div>
        
        <h2>
            <div class="hex"></div><span>Find Me</span></h2>
        <div class="subtext coll">
            <a>Twitter</a> | <a>Tumblr</a> | <a>Codepen</a> | <a>Behance</a>
        </div>
        
        <h2>
            <div class="hex"></div><span>Contact Me</span></h2>
        <div class="subtext coll">
            <ul>
                <li>Phone: +12 345 678 90</li>
                <li>E-mail: <a>lindeun@yahoo.com</a></li>
                <li>Discord: <a>Laighlin#0371</a></li>
            </ul>
        </div>
    </main>
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="wave" id="one"><path d="M-13.36,88.98 C168.85,182.73 276.72,-73.84 506.31,79.10 L500.00,150.00 L0.00,150.00 Z"></path></svg>
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="wave" id="two"><path d="M-13.36,88.98 C168.85,182.73 276.72,-73.84 506.31,79.10 L500.00,150.00 L0.00,150.00 Z"></path></svg>
    <div id="hex-holder">
        <div class="hex" id="uno"></div>
        <div class="hex" id="dos"></div>
        <div class="hex" id="tres"></div>
    </div>
</body>
<style>
	body {
    margin: 0;
    font-family: 'Share Tech', sans-serif;
    font-size:16px;
    color: #505050;
    background:#eee;
    overflow-x:hidden;
}

main {
    position:relative;
    padding:7vh 0 10vh;
    opacity:0;
    margin-top:-5px;
}

@media all and (min-width:670px) {
    main { 
        width: 570px;
        margin-left: 10vw;
    }
}

@media all and (max-width:670px) {
    main { margin:0 15px }
}

.wave {
    width:100vw;
    height:150px;
    position:fixed;
    bottom:0;
    fill:#1b7477;
    z-index:-1;
}

#one {
    height:180px;
    fill:#8adbd3;
    width:120vw;
    left:-10vw;
}

h1, h2 {
    position:relative;
    display:flex;
    align-items:center;
    font-family:'Share Tech Mono', monospace;
    line-height: 1em;
    word-spacing:-.1em;
    letter-spacing:-.05em;
    transition:.2s all ease;
    margin-left:10px;
    margin-bottom:15px;
}

h1 span, h2 span { 
    background:rgba(238,238,238,.7);
    padding:5px 7px;
    border-radius:10px;
    box-sizing:border-box;
}
h1, h2:active { color:#51b5ac; }
h1 { font-size:2.2em }
h2 { cursor:pointer }
p:first-child { margin-top:0 }
p:last-child { margin-bottom:0 }

.subtext {
    position:relative;
    border-radius:10px;
    background: white;
    border:1px solid;
    padding:13px;
    line-height:1.5em;
}

.subtext:not(#main) {
    display:none;
}

.subtext ul { margin:0; padding:0 25px; }

.subtext a { 
    color:#0a9; 
    text-decoration:underline;
    cursor:pointer;
    transition:.2s all ease;
}

.subtext a:hover, h2:hover {
    color:#777;
}

.subtext:before {
    content:'';
    position:absolute;
    width:1px;
    background:#bbb;
    left:1.2em;
    height:1.2em;
    top:calc(-1.2em - 1px);
}

.subtext.coll:before {
    left:1em;
    height:1.2em;
    top:calc(-1.2em - 1px);
}

.hex:hover {
    transform:rotate(30deg);
}

.hex, .hex:before, .hex:after {
    height:1em;
    width:.59em;
    border:solid;
    border-width:1px 0;
    border-radius:2px;
    box-sizing:border-box;
}

main .hex { 
    position:relative;
    display:inline-block;
    margin-right:.5em;
    transition:.4s all ease;
}

.hex:before, .hex:after {
    content:'';
    position:absolute;
    margin-top:-1px;
    margin-left:;
/*     color:#ccc; */
}

.hex:before { transform:rotate(60deg); }
.hex:after { transform:rotate(-60deg); }

.hex, .hex:before, .hex:after, .subtext {
    border-color:#bbb;
}

.hex.moved {
    transform:rotate(30deg);
}

#hex-holder {
    position:fixed;
    height:100vh;
    width:100vw;
    top:0;
    z-index:-1;
    pointer-events:none;
    font-size:60px;
}

#hex-holder .hex {
    position:fixed;
}

#uno {
    border-radius:4px;
    border:none;
    background:#5b8b8c;
    transform:rotate(-12deg);
    bottom:30vh;
    left:30px;
}

#uno:before, #uno:after {
    margin-top:0;
}

#hex-holder .hex:before, #hex-holder .hex:after {
    border:inherit;
    border-radius:inherit;
    background:inherit;
}

#dos {
    border-color:#1B7477;
    border-radius:3px;
    border-width:5px 0;
    font-size:100px;
    bottom:12vh;
    right:-20px;
    transform:rotate(7deg);
}

#dos:before, #dos:after {
    margin-top:-5px;
}

#tres { display:none }

#bg {
/*     z-index:100; */
    position:fixed;
    top:0;
    height:100vh;
    width:100vw;
    box-sizing:border-box;
    border:5px solid black;
}
</style>
<script>
function draw() {
    var canvas = $('canvas')[0];
    if(canvas.getContext) {
        var ctx = canvas.getContext('2d');
        ctx.fillStyle = 'rgb(200, 0, 0)';
        ctx.fillRect(10, 10, 50, 50);
        ctx.fillStyle = 'rgba(0, 0, 200, 0.5)';
        ctx.fillRect(30, 30, 50, 50);
    }
}

$(document).ready(function() {
    // $(document).draw();
    $('#content').animate({
        opacity:1,
        marginTop:'0',
    }, 800);
    $('h2').click(function() {
        $(this).next('.subtext').slideToggle('fast');
        $(this).children('.hex').toggleClass('moved');
    })
});
</script>
</html>