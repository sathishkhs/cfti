<style>

	.slider, 
.slider a > div {
    /* Images default to Center Center. Maybe try 'center top'? */
    background-position: center center;
    display: block;
    width: 100%;
    height: 500px;
    /* height: 100vh; *//* If you want fullscreen */
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #fff;
    overflow: hidden;
    -moz-transition: transform .4s;
    -o-transition: transform .4s;
    -webkit-transition: transform .4s;
    transition: transform .4s;
}

@media (max-width: 580px){
    .slider, .slider a > div {
        height: 230px;
        background-size: contain;
    }
}
.slider a > div {
    position: absolute;
}

.slider > i {
    color: #5bbd72;
    position: absolute;
    font-size: 60px;
    margin: 20px;
    top: 40%;
    text-shadow: 0 10px 2px #223422;
    transition: .3s;
    width: 30px;
    padding: 10px 13px;
    background: #fff;
    background: rgba(255, 255, 255, .3);
    cursor: pointer;
    line-height: 0;
    box-sizing: content-box;
    border-radius: 3px;
    z-index: 4;
}

.slider > i svg {
    margin-top: 3px;
}

.slider > .left {
    left: -100px;
}
.slider > .right {
    right: -100px;
}
.slider:hover > .left {
    left: 0;
}
.slider:hover > .right {
    right: 0;
}

.slider > i:hover {
    background:#fff;
    background: rgba(255, 255, 255, .8);
    transform: translateX(-2px);
}

.slider > i.right:hover {
    transform: translateX(2px);
}

.slider > i.right:active,
.slider > i.left:active {
    transform: translateY(1px);
}

.slider:hover > div {
    transform: scale(1.01);
}

.hoverZoomOff:hover > div {
    transform: scale(1);
}

.slider > ul {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 4;
    padding: 0;
    margin: 0;
    transform: translateX(-50%);
}

.slider > ul > li {
    padding: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    list-style: none;
    float: left;
    margin: 10px 10px 0;
    cursor: pointer;
    border: 1px solid #fff;
    -moz-transition: .3s;
    -o-transition: .3s;
    -webkit-transition: .3s;
    transition: .3s;
}

.slider > ul > .showli {
    background-color: #F00;
    -moz-animation: boing .5s forwards;
    -o-animation: boing .5s forwards;
    -webkit-animation: boing .5s forwards;
    animation: boing .5s forwards;
}

.slider > ul > li:hover {
    background-color: #7EC03D;
}

.slider > .show {
    z-index: 1;
}

.hideDots > ul {
    display: none;
}

.showArrows > .left {
    left: 0;
}

.showArrows > .right {
    right: 0;
}

.titleBar {
    z-index: 2;
    display: inline-block;
    background: rgba(0,0,0,.5);
    position: absolute;
    width: 100%;
    bottom: 0;
    transform: translateY(100%);
    padding: 20px 30px;
    transition: .3s;
    color: #fff;
}

.titleBar * {
    transform: translate(-20px, 30px);
    transition: all 700ms cubic-bezier(0.37, 0.31, 0.2, 0.85) 200ms;
    opacity: 0;
}

.titleBarTop .titleBar * {
    transform: translate(-20px, -30px);
}

.slider:hover .titleBar,
.slider:hover .titleBar * {
    transform: translate(0);
    opacity: 1;
}

.titleBarTop .titleBar {
    top: 0;
    bottom: initial;
    transform: translateY(-100%);
}

.slider a > div span {
    display: block;
    background: rgba(0,0,0,.5);
    position: absolute;
    bottom: 0;
    color: #fff;
    text-align: center;
    padding: 0;
    width: 100%;
}


@keyframes boing {
    0% {
        transform: scale(1.2);
    }
    40% {
        transform: scale(.6);
    }
    60% {
        transform: scale(1.2);
    }
    80% {
        transform: scale(.8);
    }
    100% {
        transform: scale(1);
    }
}
</style>



<div class="slider" id="slider1">
    <!-- Slides -->
    <!--<a href="donate-to-assam-flood-relief"><div style="background-image:url(assets/img/headers/website-banner2.jpg); background-position:left"></div></a>-->
    <a href="donate"><div style="background-image:url(assets/img/headers/hoem-header.jpeg); background-position:right"></div></a>
   
    <!-- The Arrows -->
    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
        </svg></i>
    <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
        </svg></i>
    <!-- Title Bar -->
    <!-- <span class="titleBar">
        <h1>This Slider has all default settings.</h1>
    </span> -->
</div>