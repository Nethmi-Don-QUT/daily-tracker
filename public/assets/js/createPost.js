/**
 * Update Quality Score Range according to the user input
 */
function updateQualityScore() {
    var quality_score = document.getElementById('quality_score').value;
    console.log("quality " + quality_score);
    document.getElementById('displayScore').textContent = quality_score;

}

/**
 * Update feelings Range according to the user input
 */
function updateFeelings() {
    var feelingsValue = document.getElementById('feeling').value;
    var displayFeelings = document.getElementById('displayFeelings');
    var emoji = getEmojiForFeelings(feelingsValue);
    displayFeelings.innerHTML = emoji;
}

/**
 * get feelings, user input
 */
function getEmojiForFeelings(feelingsValue) {
    var emojiMap = {
        '1': '&#128557;',
        '2': '&#128528;',
        '3': '&#128522;',
        '4': '&#128513;',
        '5': '&#128525;'
    };

    return emojiMap[feelingsValue] || '&#128522;';
}