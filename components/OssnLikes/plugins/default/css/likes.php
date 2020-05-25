.ossn-likes-view a.right.btn.btn-danger{
	font-size: 12px;
  	margin-top: 8px;
	margin-right: 5px;
    	padding: 3px 5px 3px 5px;
    	border-radius: 1px;
    	display: none;
}
.ossn-likes-view a.right.btn.btn-primary{
	font-size: 12px;
	margin-top: 8px;
	margin-right: 5px;
    	padding: 3px 5px 3px 5px;
    	border-radius: 1px;
    	display: none;
}
.emoji {
  width: 120px;
  height: 120px;
  background: #FFDA6A;
  display: inline-block;
  border-radius: 50%;
  position: relative;
  transform: scale(0.325);
    margin-left: -37px;
    margin-top: -37px;  
}
.emoji:after {

}

.emoji__face, .emoji__eyebrows, .emoji__eyes, .emoji__mouth, .emoji__tongue, .emoji__heart, .emoji__hand, .emoji__thumb {
  position: absolute;
}
.emoji__face:before, .emoji__face:after, .emoji__eyebrows:before, .emoji__eyebrows:after, .emoji__eyes:before, .emoji__eyes:after, .emoji__mouth:before, .emoji__mouth:after, .emoji__tongue:before, .emoji__tongue:after, .emoji__heart:before, .emoji__heart:after, .emoji__hand:before, .emoji__hand:after, .emoji__thumb:before, .emoji__thumb:after {
  position: absolute;
  content: '';
}

.emoji__face {
  width: inherit;
  height: inherit;
}

.emoji--like {
  background: #548DFF;
}
.emoji--like .emoji__hand {
  left: 25px;
  bottom: 30px;
  width: 20px;
  height: 40px;
  background: #FFFFFF;
  border-radius: 5px;
  z-index: 0;
  -webkit-animation: hands-up 2s linear infinite;
          animation: hands-up 2s linear infinite;
}
.emoji--like .emoji__hand:before {
  left: 25px;
  bottom: 5px;
  width: 40px;
  background: inherit;
  height: 10px;
  border-radius: 2px 10px 10px 2px;
  box-shadow: 1px -9px 0 1px #FFFFFF, 2px -19px 0 2px #FFFFFF, 3px -29px 0 3px #FFFFFF;
}
.emoji--like .emoji__thumb {
  border-bottom: 20px solid #FFFFFF;
  border-left: 20px solid transparent;
  top: -25px;
  right: -25px;
  z-index: 2;
  -webkit-transform: rotate(5deg);
          transform: rotate(5deg);
  -webkit-transform-origin: 0% 100%;
          transform-origin: 0% 100%;
  -webkit-animation: thumbs-up 2s linear infinite;
          animation: thumbs-up 2s linear infinite;
}
.emoji--like .emoji__thumb:before {
  border-radius: 50% 50% 0 0;
  background: #FFFFFF;
  width: 10px;
  height: 12px;
  left: -10px;
  top: -8px;
  -webkit-transform: rotate(-15deg);
          transform: rotate(-15deg);
  -webkit-transform-origin: 100% 100%;
          transform-origin: 100% 100%;
  box-shadow: -1px 4px 0 -1px #FFFFFF;
}

.emoji--love {
  background: #F55064;
}
.emoji--love .emoji__heart {
  left: calc(50% - 40px);
  top: calc(50% - 40px);
  width: 80px;
  height: 80px;
  -webkit-animation: heart-beat 1s linear infinite alternate;
          animation: heart-beat 1s linear infinite alternate;
}
.emoji--love .emoji__heart:before, .emoji--love .emoji__heart:after {
  left: calc(50% - 20px);
  top: calc(50% - 32px);
  width: 40px;
  height: 64px;
  background: #FFFFFF;
  border-radius: 20px 20px 0 0;
}
.emoji--love .emoji__heart:before {
  -webkit-transform: translate(20px) rotate(-45deg);
          transform: translate(20px) rotate(-45deg);
  -webkit-transform-origin: 0 100%;
          transform-origin: 0 100%;
}
.emoji--love .emoji__heart:after {
  -webkit-transform: translate(-20px) rotate(45deg);
          transform: translate(-20px) rotate(45deg);
  -webkit-transform-origin: 100% 100%;
          transform-origin: 100% 100%;
}
.emoji--haha .emoji__face {
  -webkit-animation: haha-face 2s linear infinite;
          animation: haha-face 2s linear infinite;
}
.emoji--haha .emoji__eyes {
  width: 26px;
  height: 6px;
  border-radius: 2px;
  left: calc(50% - 13px);
  top: 35px;
  -webkit-transform: rotate(20deg);
          transform: rotate(20deg);
  background: transparent;
  box-shadow: -25px 5px 0 0 #000000, 25px -5px 0 0 #000000;
}
.emoji--haha .emoji__eyes:after {
  left: 0;
  top: 0;
  width: 26px;
  height: 6px;
  border-radius: 2px;
  -webkit-transform: rotate(-40deg);
          transform: rotate(-40deg);
  background: transparent;
  box-shadow: -25px -5px 0 0 #000000, 25px 5px 0 0 #000000;
}
.emoji--haha .emoji__mouth {
  width: 80px;
  height: 40px;
  left: calc(50% - 40px);
  top: 50%;
  background: #000000;
  border-radius: 0 0 40px 40px;
  overflow: hidden;
  z-index: 1;
  -webkit-animation: haha-mouth 2s linear infinite;
          animation: haha-mouth 2s linear infinite;
}
.emoji--haha .emoji__tongue {
  width: 70px;
  height: 30px;
  background: #F55064;
  left: calc(50% - 35px);
  bottom: -10px;
  border-radius: 50%;
}

.emoji--yay:after {
  -webkit-animation: yay-reverse 1s linear infinite;
          animation: yay-reverse 1s linear infinite;
}
.emoji--yay .emoji__face {
  -webkit-animation: yay 1s linear infinite alternate;
          animation: yay 1s linear infinite alternate;
}
.emoji--yay .emoji__eyebrows {
  left: calc(50% - 3px);
  top: 30px;
  height: 6px;
  width: 6px;
  border-radius: 50%;
  background: transparent;
  box-shadow: -6px 0 0 0 #000000, -36px 0 0 0px #000000, 6px 0 0 0 #000000, 36px 0 0 0px #000000;
}
.emoji--yay .emoji__eyebrows:before, .emoji--yay .emoji__eyebrows:after {
  width: 36px;
  height: 18px;
  border-radius: 60px 60px 0 0;
  background: transparent;
  border: 6px solid black;
  box-sizing: border-box;
  border-bottom: 0;
  bottom: 3px;
  left: calc(50% - 18px);
}
.emoji--yay .emoji__eyebrows:before {
  margin-left: -21px;
}
.emoji--yay .emoji__eyebrows:after {
  margin-left: 21px;
}
.emoji--yay .emoji__mouth {
  top: 60px;
  background: transparent;
  left: 50%;
}
.emoji--yay .emoji__mouth:after {
  width: 80px;
  height: 80px;
  left: calc(50% - 40px);
  top: -75px;
  border-radius: 50%;
  background: transparent;
  border: 6px solid #000000;
  box-sizing: border-box;
  border-top-color: transparent;
  border-left-color: transparent;
  border-right-color: transparent;
  z-index: 1;
}
.emoji--yay .emoji__mouth:before {
  width: 6px;
  height: 6px;
  background: transparent;
  border-radius: 50%;
  bottom: 5px;
  left: calc(50% - 3px);
  box-shadow: -25px 0 0 0 #000000, 25px 0 0 0 #000000, -35px -2px 30px 10px #D5234C, 35px -2px 30px 10px #D5234C;
}
.emoji--wow .emoji__face {
  -webkit-animation: wow-face 3s linear infinite;
          animation: wow-face 3s linear infinite;
}
.emoji--wow .emoji__eyebrows {
  left: calc(50% - 3px);
  height: 6px;
  width: 6px;
  border-radius: 50%;
  background: transparent;
  box-shadow: -18px 0 0 0 #000000, -33px 0 0 0 #000000, 18px 0 0 0 #000000, 33px 0 0 0 #000000;
  -webkit-animation: wow-brow 3s linear infinite;
          animation: wow-brow 3s linear infinite;
}
.emoji--wow .emoji__eyebrows:before, .emoji--wow .emoji__eyebrows:after {
  width: 24px;
  height: 20px;
  border: 6px solid #000000;
  box-sizing: border-box;
  border-radius: 50%;
  border-bottom-color: transparent;
  border-left-color: transparent;
  border-right-color: transparent;
  top: -3px;
  left: calc(50% - 12px);
}
.emoji--wow .emoji__eyebrows:before {
  margin-left: -25px;
}
.emoji--wow .emoji__eyebrows:after {
  margin-left: 25px;
}
.emoji--wow .emoji__eyes {
  width: 16px;
  height: 24px;
  left: calc(50% - 8px);
  top: 35px;
  border-radius: 50%;
  background: transparent;
  box-shadow: 25px 0 0 0 #000000, -25px 0 0 0 #000000;
}
.emoji--wow .emoji__mouth {
  width: 30px;
  height: 45px;
  left: calc(50% - 15px);
  top: 50%;
  border-radius: 50%;
  background: #000000;
  -webkit-animation: wow-mouth 3s linear infinite;
          animation: wow-mouth 3s linear infinite;
}
.emoji--sad .emoji__face {
  -webkit-animation: sad-face 2s ease-in infinite;
          animation: sad-face 2s ease-in infinite;
}
.emoji--sad .emoji__eyebrows {
  left: calc(50% - 3px);
  top: 35px;
  height: 6px;
  width: 6px;
  border-radius: 50%;
  background: transparent;
  box-shadow: -40px 9px 0 0 #000000, -25px 0 0 0 #000000, 25px 0 0 0 #000000, 40px 9px 0 0 #000000;
}
.emoji--sad .emoji__eyebrows:before, .emoji--sad .emoji__eyebrows:after {
  width: 30px;
  height: 20px;
  border: 6px solid #000000;
  box-sizing: border-box;
  border-radius: 50%;
  border-bottom-color: transparent;
  border-left-color: transparent;
  border-right-color: transparent;
  top: 2px;
  left: calc(50% - 15px);
}
.emoji--sad .emoji__eyebrows:before {
  margin-left: -30px;
  -webkit-transform: rotate(-30deg);
          transform: rotate(-30deg);
}
.emoji--sad .emoji__eyebrows:after {
  margin-left: 30px;
  -webkit-transform: rotate(30deg);
          transform: rotate(30deg);
}
.emoji--sad .emoji__eyes {
  width: 14px;
  height: 16px;
  left: calc(50% - 7px);
  top: 50px;
  border-radius: 50%;
  background: transparent;
  box-shadow: 25px 0 0 0 #000000, -25px 0 0 0 #000000;
}
.emoji--sad .emoji__eyes:after {
  background: #548DFF;
  width: 12px;
  height: 12px;
  margin-left: 6px;
  border-radius: 0 100% 40% 50% / 0 50% 40% 100%;
  -webkit-transform-origin: 0% 0%;
          transform-origin: 0% 0%;
  -webkit-animation: tear-drop 2s ease-in infinite;
          animation: tear-drop 2s ease-in infinite;
}
.emoji--sad .emoji__mouth {
  width: 60px;
  height: 80px;
  left: calc(50% - 30px);
  top: 80px;
  box-sizing: border-box;
  border: 6px solid #000000;
  border-radius: 50%;
  border-bottom-color: transparent;
  border-left-color: transparent;
  border-right-color: transparent;
  background: transparent;
  -webkit-animation: sad-mouth 2s ease-in infinite;
          animation: sad-mouth 2s ease-in infinite;
}
.emoji--sad .emoji__mouth:after {
  width: 6px;
  height: 6px;
  background: transparent;
  border-radius: 50%;
  top: 4px;
  left: calc(50% - 3px);
  box-shadow: -18px 0 0 0 #000000, 18px 0 0 0 #000000;
}

.emoji--angry {
  background: linear-gradient(#D5234C -10%, #FFDA6A);
  background-size: 100%;
  -webkit-animation: angry-color 2s ease-in infinite;
          animation: angry-color 2s ease-in infinite;
}
.emoji--angry .emoji__face {
  -webkit-animation: angry-face 2s ease-in infinite;
          animation: angry-face 2s ease-in infinite;
}
.emoji--angry .emoji__eyebrows {
  left: calc(50% - 3px);
  top: 55px;
  height: 6px;
  width: 6px;
  border-radius: 50%;
  background: transparent;
  box-shadow: -44px 5px 0 0 #000000, -7px 16px 0 0 #000000, 7px 16px 0 0 #000000, 44px 5px 0 0 #000000;
}
.emoji--angry .emoji__eyebrows:before, .emoji--angry .emoji__eyebrows:after {
  width: 50px;
  height: 20px;
  border: 6px solid #000000;
  box-sizing: border-box;
  border-radius: 50%;
  border-top-color: transparent;
  border-left-color: transparent;
  border-right-color: transparent;
  top: 0;
  left: calc(50% - 25px);
}
.emoji--angry .emoji__eyebrows:before {
  margin-left: -25px;
  -webkit-transform: rotate(15deg);
          transform: rotate(15deg);
}
.emoji--angry .emoji__eyebrows:after {
  margin-left: 25px;
  -webkit-transform: rotate(-15deg);
          transform: rotate(-15deg);
}
.emoji--angry .emoji__eyes {
  width: 12px;
  height: 12px;
  left: calc(50% - 6px);
  top: 70px;
  border-radius: 50%;
  background: transparent;
  box-shadow: 25px 0 0 0 #000000, -25px 0 0 0 #000000;
}
.emoji--angry .emoji__mouth {
  width: 36px;
  height: 18px;
  left: calc(50% - 18px);
  bottom: 15px;
  background: #000000;
  border-radius: 50%;
  -webkit-animation: angry-mouth 2s ease-in infinite;
          animation: angry-mouth 2s ease-in infinite;
}

@-webkit-keyframes heart-beat {
  25% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  75% {
    -webkit-transform: scale(0.6);
            transform: scale(0.6);
  }
}

@keyframes heart-beat {
  25% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  75% {
    -webkit-transform: scale(0.6);
            transform: scale(0.6);
  }
}
@-webkit-keyframes haha-face {
  10%, 30%, 50% {
    -webkit-transform: translateY(25px);
            transform: translateY(25px);
  }
  20%, 40% {
    -webkit-transform: translateY(15px);
            transform: translateY(15px);
  }
  60%, 80% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  70%, 90% {
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
  }
}
@keyframes haha-face {
  10%, 30%, 50% {
    -webkit-transform: translateY(25px);
            transform: translateY(25px);
  }
  20%, 40% {
    -webkit-transform: translateY(15px);
            transform: translateY(15px);
  }
  60%, 80% {
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
  70%, 90% {
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
  }
}
@-webkit-keyframes haha-mouth {
  10%, 30%, 50% {
    -webkit-transform: scale(0.6);
            transform: scale(0.6);
    top: 45%;
  }
  20%, 40% {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
    top: 45%;
  }
  60%, 80% {
    -webkit-transform: scale(1);
            transform: scale(1);
    top: 50%;
  }
  70% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
    top: 50%;
  }
  90% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
    top: 50%;
  }
}
@keyframes haha-mouth {
  10%, 30%, 50% {
    -webkit-transform: scale(0.6);
            transform: scale(0.6);
    top: 45%;
  }
  20%, 40% {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
    top: 45%;
  }
  60%, 80% {
    -webkit-transform: scale(1);
            transform: scale(1);
    top: 50%;
  }
  70% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
    top: 50%;
  }
  90% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
    top: 50%;
  }
}
@-webkit-keyframes yay {
  25% {
    -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
  }
  75% {
    -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
  }
}
@keyframes yay {
  25% {
    -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
  }
  75% {
    -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
  }
}
@-webkit-keyframes wow-face {
  15%, 25% {
    -webkit-transform: rotate(20deg) translateX(-25px);
            transform: rotate(20deg) translateX(-25px);
  }
  45%, 65% {
    -webkit-transform: rotate(-20deg) translateX(25px);
            transform: rotate(-20deg) translateX(25px);
  }
  75%, 100% {
    -webkit-transform: rotate(0deg) translateX(0);
            transform: rotate(0deg) translateX(0);
  }
}
@keyframes wow-face {
  15%, 25% {
    -webkit-transform: rotate(20deg) translateX(-25px);
            transform: rotate(20deg) translateX(-25px);
  }
  45%, 65% {
    -webkit-transform: rotate(-20deg) translateX(25px);
            transform: rotate(-20deg) translateX(25px);
  }
  75%, 100% {
    -webkit-transform: rotate(0deg) translateX(0);
            transform: rotate(0deg) translateX(0);
  }
}
@-webkit-keyframes wow-brow {
  15%, 65% {
    top: 25px;
  }
  75%, 100%, 0% {
    top: 15px;
  }
}
@keyframes wow-brow {
  15%, 65% {
    top: 25px;
  }
  75%, 100%, 0% {
    top: 15px;
  }
}
@-webkit-keyframes wow-mouth {
  10%, 30% {
    width: 20px;
    height: 20px;
    left: calc(50% - 10px);
  }
  50%, 70% {
    width: 30px;
    height: 40px;
    left: calc(50% - 15px);
  }
  75%, 100% {
    height: 50px;
  }
}
@keyframes wow-mouth {
  10%, 30% {
    width: 20px;
    height: 20px;
    left: calc(50% - 10px);
  }
  50%, 70% {
    width: 30px;
    height: 40px;
    left: calc(50% - 15px);
  }
  75%, 100% {
    height: 50px;
  }
}
@-webkit-keyframes sad-face {
  25%, 35% {
    top: -15px;
  }
  55%, 95% {
    top: 10px;
  }
  100%, 0% {
    top: 0;
  }
}
@keyframes sad-face {
  25%, 35% {
    top: -15px;
  }
  55%, 95% {
    top: 10px;
  }
  100%, 0% {
    top: 0;
  }
}
@-webkit-keyframes sad-mouth {
  25%, 35% {
    -webkit-transform: scale(0.85);
            transform: scale(0.85);
    top: 70px;
  }
  55%, 100%, 0% {
    -webkit-transform: scale(1);
            transform: scale(1);
    top: 80px;
  }
}
@keyframes sad-mouth {
  25%, 35% {
    -webkit-transform: scale(0.85);
            transform: scale(0.85);
    top: 70px;
  }
  55%, 100%, 0% {
    -webkit-transform: scale(1);
            transform: scale(1);
    top: 80px;
  }
}
@-webkit-keyframes tear-drop {
  0%, 100% {
    display: block;
    left: 35px;
    top: 15px;
    -webkit-transform: rotate(45deg) scale(0);
            transform: rotate(45deg) scale(0);
  }
  25% {
    display: block;
    left: 35px;
    -webkit-transform: rotate(45deg) scale(2);
            transform: rotate(45deg) scale(2);
  }
  49.9% {
    display: block;
    left: 35px;
    top: 65px;
    -webkit-transform: rotate(45deg) scale(0);
            transform: rotate(45deg) scale(0);
  }
  50% {
    display: block;
    left: -35px;
    top: 15px;
    -webkit-transform: rotate(45deg) scale(0);
            transform: rotate(45deg) scale(0);
  }
  75% {
    display: block;
    left: -35px;
    -webkit-transform: rotate(45deg) scale(2);
            transform: rotate(45deg) scale(2);
  }
  99.9% {
    display: block;
    left: -35px;
    top: 65px;
    -webkit-transform: rotate(45deg) scale(0);
            transform: rotate(45deg) scale(0);
  }
}
@keyframes tear-drop {
  0%, 100% {
    display: block;
    left: 35px;
    top: 15px;
    -webkit-transform: rotate(45deg) scale(0);
            transform: rotate(45deg) scale(0);
  }
  25% {
    display: block;
    left: 35px;
    -webkit-transform: rotate(45deg) scale(2);
            transform: rotate(45deg) scale(2);
  }
  49.9% {
    display: block;
    left: 35px;
    top: 65px;
    -webkit-transform: rotate(45deg) scale(0);
            transform: rotate(45deg) scale(0);
  }
  50% {
    display: block;
    left: -35px;
    top: 15px;
    -webkit-transform: rotate(45deg) scale(0);
            transform: rotate(45deg) scale(0);
  }
  75% {
    display: block;
    left: -35px;
    -webkit-transform: rotate(45deg) scale(2);
            transform: rotate(45deg) scale(2);
  }
  99.9% {
    display: block;
    left: -35px;
    top: 65px;
    -webkit-transform: rotate(45deg) scale(0);
            transform: rotate(45deg) scale(0);
  }
}
@-webkit-keyframes hands-up {
  25% {
    -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
  }
  50% {
    -webkit-transform: rotate(-15deg) translateY(-10px);
            transform: rotate(-15deg) translateY(-10px);
  }
  75%, 100% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
}
@keyframes hands-up {
  25% {
    -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
  }
  50% {
    -webkit-transform: rotate(-15deg) translateY(-10px);
            transform: rotate(-15deg) translateY(-10px);
  }
  75%, 100% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
}
@-webkit-keyframes thumbs-up {
  25% {
    -webkit-transform: rotate(20deg);
            transform: rotate(20deg);
  }
  50%, 100% {
    -webkit-transform: rotate(5deg);
            transform: rotate(5deg);
  }
}
@keyframes thumbs-up {
  25% {
    -webkit-transform: rotate(20deg);
            transform: rotate(20deg);
  }
  50%, 100% {
    -webkit-transform: rotate(5deg);
            transform: rotate(5deg);
  }
}
@-webkit-keyframes angry-color {
  45%, 60% {
    background-size: 250%;
  }
  85%, 100%, 0% {
    background-size: 100%;
  }
}
@keyframes angry-color {
  45%, 60% {
    background-size: 250%;
  }
  85%, 100%, 0% {
    background-size: 100%;
  }
}
@-webkit-keyframes angry-face {
  35%, 60% {
    -webkit-transform: translateX(0) translateY(10px) scale(0.9);
            transform: translateX(0) translateY(10px) scale(0.9);
  }
  40%, 50% {
    -webkit-transform: translateX(-5px) translateY(10px) scale(0.9);
            transform: translateX(-5px) translateY(10px) scale(0.9);
  }
  45%, 55% {
    -webkit-transform: translateX(5px) translateY(10px) scale(0.9);
            transform: translateX(5px) translateY(10px) scale(0.9);
  }
}
@keyframes angry-face {
  35%, 60% {
    -webkit-transform: translateX(0) translateY(10px) scale(0.9);
            transform: translateX(0) translateY(10px) scale(0.9);
  }
  40%, 50% {
    -webkit-transform: translateX(-5px) translateY(10px) scale(0.9);
            transform: translateX(-5px) translateY(10px) scale(0.9);
  }
  45%, 55% {
    -webkit-transform: translateX(5px) translateY(10px) scale(0.9);
            transform: translateX(5px) translateY(10px) scale(0.9);
  }
}
@-webkit-keyframes angry-mouth {
  25%, 50% {
    height: 6px;
    bottom: 25px;
  }
}
@keyframes angry-mouth {
  25%, 50% {
    height: 6px;
    bottom: 25px;
  }
}
.ossn-like-reactions-panel {
	background: #ffffff;
        width: 313px;
    padding: 2px;
    position: absolute;
    height:50px;
    top: auto;
    
    z-index: 999;
   margin-top: -75px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
    border-radius: 2em;
    cursor: default; 
 }
.ossn-like-reactions-panel li:after {
 	margin-left:0px;
    margin-right:0px;
    content:'';
}
.ossn-like-reactions-panel li {
	display:inline-block;
    width: 40px;
    height: 40px;
	cursor:pointer;
}
.ossn-reaction-list .emoji {
    transform: scale(0.133);
    margin-left: -55px;
    margin-top: -50px;
}
.ossn-reaction-list {
	float:left;
    height:20px;
}
.ossn-reaction-list li {
	display:inline-block;
    width: 10px;
    height: 20px;    
}
.ossn-reaction-title-wholiked {
	 margin-left:10px;
}
.ossn-reaction-list .emoji__eyes:after,
.ossn-reaction-list .emoji__tongue,
.ossn-reaction-list .emoji__eyebrows,
.ossn-reaction-list .emoji__eyes,
.ossn-reaction-list .emoji__face,
.ossn-reaction-list .emoji__mouth,
.ossn-reaction-list .emoji__face,
.ossn-reaction-list .emoji__heart,
.ossn-reaction-list .emoji__hand {
	animation:none;
}
.ossn-reactions-list-whoreacted .emoji{

}
.ossn-reactions-list-wholiked-item img {
    border: 1px solid #eee;
    border-radius: 100%;
}
.ossn-reactions-list-wholiked-item {
    border-bottom: 1px solid #eee;
    padding-bottom: 5px;
    padding-top: 5px;
    padding-left: 10px;
    padding-right: 10px;
}
.ossn-reactions-list-whoreacted-uinfo a {
    font-weight: bold;
}
.ossn-reactions-list-whoreacted {
	float:none;
    margin-left:5px;
}
@media (max-width: 480px) {
	.ossn-like-reactions-panel {
   	 	margin-left: -100px;
    	transform: scale(0.8);
    }
   .comment-contents .ossn-like-reactions-panel {
    	margin-left: -30px;
	}

}
.ossn-likes-annotation-total {
	float:right;
}
.comment-metadata .ossn-reaction-list {
    float: right;
    margin-left: 10px;
}
.comment-metadata .ossn-reaction-list .emoji {
	transform: scale(0.12);
    margin-top: -51px;
}
