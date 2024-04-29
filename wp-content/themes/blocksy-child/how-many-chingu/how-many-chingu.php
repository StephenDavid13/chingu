<?php
function how_many_chingus_shortcode() {
    ob_start(); ?>
    <style>
        .chinguRange {
            display: flex;
            margin: 20px auto;
            text-align: center;
            align-items: flex-end;
            gap: 25px 10vw;
        }

        .chinguRange-inputs {
            width: 100%;
            min-width: 500px;
            min-height: 155px;
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

        .fas.fa-glass-whiskey {
            color: #ffffff;
            font-size: 80px;
            margin: 50px 0;
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
    </style>

    <div class="chinguRange">
        <div class="chinguRange-inputs">
            <h3 id="chinguRange-title">I'll have a couple</h3>
            <h5 id="chinguRange-subtitle">Consume one gel after drinking</h5>
            <input type="range" id="chinguRange" min="1" max="100" value="25">
        </div>
        <div class="chinguRange-solutions">
            <div id="beforeDrinking">
                <h4>Before drinking</h4>
                <i id="beforeDrinkingIcon" class="fas fa-glass-whiskey fa-lg"></i>
            </div>
            <div id="duringDrinking">
                <h4>During drinking</h4>
                <i id="duringDrinkingIcon" class="fas fa-glass-whiskey fa-lg"></i>
            </div>
                <div id="afterDrinking">
                <h4>After drinking</h4>
                <i id="afterDrinkingIcon" class="fas fa-glass-whiskey fa-lg" style="color: #ffa602;"></i>
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
                if (value <= 33) {
                    chinguRangeTitle.innerText = "I'll have a couple";
                    chinguRangeSubtitle.innerText = "Consume one gel after drinking";

                    beforeDrinking.style.color = '#fff';
                    duringDrinking.style.color = '#fff';
                } else if( value >= 66) {
                    chinguRangeTitle.innerText = "I'm on a Bender";
                    chinguRangeSubtitle.innerText = "Consume one before, during, and after drinking";
                    
                    beforeDrinking.style.color = '#ffa602';
                    duringDrinking.style.color = '#ffa602';
                } else {
                    chinguRangeTitle.innerText = "I'm getting lit";
                    chinguRangeSubtitle.innerText = "Consume one before and after drinking";

					beforeDrinking.style.color = '#ffa602';
                    duringDrinking.style.color = '#fff';
				}
            });
        });
    </script>
    <?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode('how_many_chingus', 'how_many_chingus_shortcode');
