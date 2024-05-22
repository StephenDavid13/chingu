<?php
function how_many_chingus_shortcode() {
    ob_start(); ?>
    <style>
        .chinguRange {
            display: flex;
            margin: 20px auto;
            text-align: center;
            align-items: flex-start;
            gap: 25px 10vw;
        }

        .chinguRange-inputs {
            width: 100%;
            min-width: 500px;
            min-height: 125px;
            align-content: end;

        }

        .chinguRange-inputs #chinguRange-title {
            margin: 0;
        }

        .chinguRange-inputs #chinguRange-subtitle {
            margin: 0 0 20px;
        }

        .chinguRange-solutions {
            width: 100%;
            display: flex;
            flex-direction: row;
            gap: 20px;
        }

        input#chinguRange {
            height: 20px;
            overflow: hidden;
            -webkit-appearance: none;
            appearance: none;
            background-color: #fdda4c;
            width: 100%;
        }

        .range-icons {
            position: relative;
            width: 100%;
        }

        .icon {
            color: #ffffff;
            position: absolute;
            bottom: -20px;
            transform: translateX(-50%);
        }

        .chinguRange-solutions img {
            height: 110px !important;
            margin-top: -20px;
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {
            input#chinguRange::-webkit-slider-runnable-track {
                height: 20px;
                -webkit-appearance: none;
                color: #ffa602;
                margin-top: -1px;
            }
            
            input#chinguRange::-webkit-slider-thumb {
                width: 10px;
                -webkit-appearance: none;
                height: 20px;
                border-radius: 50px;
                cursor: ew-resize;
                background-color: #ffa602;
                box-shadow: -100vw 0 0 100vw #ffa602;
            }

        }

        @media screen and (max-width: 1100px) {
            .chinguRange {
                flex-direction: column;
                column-gap: 50px;
            }

            .chinguRange-inputs {
                width: 100%;
                min-width: auto;
            }
        }
        
        input#chinguRange::-webkit-slider-thumb {
            background-color: #ffa602;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            -webkit-appearance: none;
            appearance: none;
            cursor: pointer;
        }

        @media screen and (max-width: 600px) {
            .chinguRange-inputs #chinguRange-title {
                font-size: 26px;
            }

            .chinguRange-inputs #chinguRange-subtitle {
                font-size: 13px;
            }

            .chinguRange-solutions h4 {
                font-size: 26px;
                margin: 10px 0 -10px;
            }
        }
    </style>

    <div class="chinguRange">
        <div class="chinguRange-inputs">
            <h3 id="chinguRange-title">I'll have a few drinks</h3>
            <h5 id="chinguRange-subtitle">Consume one gel after drinking</h5>
            <input type="range" id="chinguRange" min="1" max="100" value="5">
            <div class="range-icons">
                <div class="icon" style="left: 2%;"><i id="oneThirdGlass" class="fas fa-glass-whiskey fa-lg" style="color: #ffa602;"></i></div>
                <div class="icon" style="left: 50%;"><i id="twoThirdGlass" class="fas fa-glass-whiskey fa-lg"></i></div>
                <div class="icon" style="right: -2%;"><i id="oneHundredGlass" class="fas fa-glass-whiskey fa-lg"></i></div>
            </div>
        </div>
        <div class="chinguRange-solutions">
            <div id="beforeDrinking">
                <h4>Before drinking</h4>
                <img id="beforeDrinkingIcon" src="http://chingustore.com/wp-content/uploads/2024/05/chingu.svg" style="opacity:0.25;" />
            </div>
            <div id="duringDrinking">
                <h4>During drinking</h4>
                <img id="duringDrinkingIcon" src="http://chingustore.com/wp-content/uploads/2024/05/chingu.svg" style="opacity:0.25;" />
            </div>
                <div id="afterDrinking">
                <h4>After drinking</h4>
                <img id="afterDrinkingIcon" src="http://chingustore.com/wp-content/uploads/2024/05/chingu.svg" />
           </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myRange = document.getElementById('chinguRange');
            var chinguRangeTitle = document.getElementById('chinguRange-title');
            var chinguRangeSubtitle = document.getElementById('chinguRange-subtitle');
            var beforeDrinking = document.getElementById('beforeDrinkingIcon');
            var duringDrinking = document.getElementById('duringDrinkingIcon');

            myRange.addEventListener('input', function() {
                var value = parseInt(this.value);

                // Example logic to change CSS of divs based on range input value
                if (value <= 40) {
                    chinguRangeTitle.innerText = "I'll have a few drinks";
                    chinguRangeSubtitle.innerText = "Consume one gel after drinking";
                    document.getElementById('oneThirdGlass').style.color = '#ffa602';
                    document.getElementById('twoThirdGlass').style.color = '#ffffff';
                    document.getElementById('oneHundredGlass').style.color = '#ffffff';

                    beforeDrinking.style.opacity = '0.25';
                    duringDrinking.style.opacity = '0.25';
                } else if( value >= 80) {
                    chinguRangeTitle.innerText = "I'm on a bender";
                    chinguRangeSubtitle.innerText = "Consume one gel before, during, and after drinking";
                    document.getElementById('oneThirdGlass').style.color = '#ffa602';
                    document.getElementById('twoThirdGlass').style.color = '#ffa602';
                    document.getElementById('oneHundredGlass').style.color = '#ffa602';
                    
                    beforeDrinking.style.opacity = '1';
                    duringDrinking.style.opacity = '1';
                } else {
                    chinguRangeTitle.innerText = "I'm getting lit";
                    chinguRangeSubtitle.innerText = "Consume one gel before and after drinking";
                    document.getElementById('oneThirdGlass').style.color = '#ffa602';
                    document.getElementById('twoThirdGlass').style.color = '#ffa602';
                    document.getElementById('oneHundredGlass').style.color = '#ffffff';

					beforeDrinking.style.opacity = '1';
                    duringDrinking.style.opacity = '0.25';
				}
            });
        });
    </script>
    <?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode('how_many_chingus', 'how_many_chingus_shortcode');
