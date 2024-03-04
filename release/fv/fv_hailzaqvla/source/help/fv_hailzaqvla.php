<?php 
  $pagename = 'Haiɫzaqvla Keyboard Help';
  $pagetitle = 'Haiɫzaqvla Keyboard Help';
  $pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

  require_once('header.php');
?>

<p style='margin: 16px 0 0 0'>
  This keyboard is designed for the <b>Haiɫzaqvla</b> language of the BC Coast region of Canada.
</p>
<p>
  If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>

<div class='vspace'></div>

<h3>Alternate Name</h3>
<ul>
  <li>Heiltsuk</li>
</ul>


<br/>

<h2>Keyboard Layout (Desktop)</h2>
<div id='osk' data-states='default shift alt shift-alt'></div>

<h3>Notes on desktop layout</h3>

<ul>
  <li>ħ: type the ` key (next to the number 1).</li>
  <li>λ: type the [ key. (Capital is not available in all fonts.)</li>
  <li>ƛ: type the ] key. (Capital is not available.)</li>
  <li>ɫ: type the \ key.</li>
  <li>ʔ: hold RIGHT ALT and type the / key.</li>
    <ul>
      <li><b>NOTE</b>: When using Google Docs with Google Chrome, RIGHT ALT or OPTION + / is already used as a shortcut. ʔ can instead be typed RIGHT ALT/OPTION + SHIFT + /</li>
    </ul>
  <li>ǧ x̌:
    <ul>
      <li>Type g/x, then hold SHIFT and press 6 to add the extra ˇ mark.</li>
      <li>OR hold RIGHT ALT and type g/x.</li>
    </ul>
  </li>
  <li>ḷ ṃ ṇ:
    <ul>
      <li>Type l/m/n, then hold SHIFT and press . (period) to add the extra dot.</li>
      <li>OR hold RIGHT ALT and type l/m/n. 
      <br><em>Note: RIGHT ALT+SHIFT+M is used in Keyman by default to open the Keyman menu, so this method cannot be used to type Ṃ. You must either use the first method, or go to Configuration < Hotkeys in the Keyman menu to remove that default.</em></li>
    </ul>
  </li>
  <li>p̓ t̓ a̓, etc: Type the letter you want, then hold SHIFT and press , (comma) to add the glottal.</li>
  <li>á ú, à ù, etc:
    <ul>
      <li>Type the letter you want, then hold SHIFT and press - (hyphen) to add the ´ accent.</li>
      <li>Type the letter you want, then hold RIGHT ALT and press ` (next to the number 1) to add the ` accent.</li>
    </ul>
  </li>
  <li>For punctuation keys that were replaced with some other letter or accent, you can get the original symbol by pressing RIGHT ALT. (Example: hold RIGHT ALT and press \ to type \.)</li>
</ul>

<div class='vspace'></div>

<h2>Keyboard Layout (Mobile/Touch)</h2>
<div id='osk-tablet' data-states='default shift numeric'></div>

<h3>Notes on touch layout</h3>
<div id='wikitext'>
  <div class='vspace'></div>
  <table border='1' style='border-collapse:collapse' cellpadding='5' >
    <tr >
      <td  align='center'>q q̓</td>
      <td  align='center'>w w̓</td>
      <td  align='center'>e é e̓</td>
      <td  align='center'>ʔ</td>
      <td  align='center'>t t̓</td>
      <td  align='center'>y y̓</td>
      <td  align='center'>u ú u̓</td>
      <td  align='center'>i í i̓</td>
      <td  align='center'>ɫ</td>
      <td  align='center'>p p̓</td>
    </tr>
    <tr >
      <td  align='center'>a á a̓ ǎ 'ǎ</td>
      <td  align='center'>s</td>
      <td  align='center'>d</td>
      <td  align='center'>λ</td>
      <td  align='center'>g ǧ</td>
      <td  align='center'>h h̓ ħ</td>
      <td  align='center'>ƛ ƛ̓</td>
      <td  align='center'>k k̓</td>
      <td  align='center'>l l̓ ḷ ḷ́ ḷ̓</td>
      <td  align='center'>' "</td>
    </tr>
    <tr >
      <td >&nbsp;</td>
      <td  align='center'>z</td>
      <td  align='center'>x x̌</td>
      <td  align='center'>c c̓</td>
      <td  align='center'>v</td>
      <td  align='center'>b</td>
      <td  align='center'>n n̓ ṇ ṇ́ ṇ̓</td>
      <td  align='center'>m m̓ ṃ ṃ́ ṃ̓</td>
      <td  colspan='2'>&nbsp;</td>
    </tr>
  </table>

  <div class='vspace'></div>

  <ul>
    <li>The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.</li>
    <li>The combining apostrophe key (ʼ) is to the left of the spacebar. You can use this instead of the hold-select menu.</li>
    <li>Capital forms for ƛ and λ are unavailable.</li>
  </ul>

</div>
