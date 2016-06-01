Font Testing Page
=================

Stable releases available for use at http://www.impallari.com/testing

The Font Testing Page is a tool primarily intended for type designers to 'Drag and Drop' and quickly test their fonts into a browser. It can also be used by Type and Art Directors, Graphic Designers, Teachers and Students interested in seeing how a typeface works on the web.

There is a short video demonstrating this tool, http://vimeo.com/40296571

Operation is simple:

- Drag the font you want to try to the upper area of the Testing Page
- Add more fonts and you'll see their file names and file sizes as buttons

Below the drop area you see some buttons to select different layouts:

- Headlines: Displays examples: 72, 60, 48, 36 and 30 to 12.
- Text: Displays text blocks, from 20 to 10.
- Adhesion: Shows examples using only 'adhesion' text. Intended for the early stages on a typeface design.
- Hamburgefonstiv Examples using 'Hamburgefonstiv' text.
- Lowercase only: Displays examples of 72, 60, 48, 36, 30, 24, 18 and 16 to 10.
- Caps: Displays examples of words in Sentence Case at 60.
- All Caps: Displays examples of words in All-Caps at 60.
- Layout: Displays examples of Headline, Subhead and Body text.
- Kern: Displays examples of combinations of letters and miscellaneous signs.
- Latin: Diacritics for 103 Latin languages, pangrams and text samples.
- And many many more...

Notes:

- Requires Firefox or Chrome
- 100% safe: Your fonts are only stored in your own browser (using `localStorage`) and **nothing gets uploaded to any server**

Secret tips for the "Filter text" tool:

- When working on text fonts: Set the size to 18px or lower, and you will get nice blocks at all text sizes at the same time.
- When working on display fonts: Set the size to 200 and you get a small cascade, set it to 300px and you get a full cascade (Great for deciding on your font's spacing/fitting).

Developers:

To download the latest version and use it locally: 

    git clone https://github.com/impallari/Font-Testing-Page.git;
    cd Font-Testing-Page;
    php -S 127.0.0.1:8080

Then visit <http://127.0.0.1:8080> to see your local version of the tool.

Thanks:

- Inspired by Jonathan Kew's [OpenType Playground](http://people.mozilla.com/~jkew/opentype-feature-playground.html) made for Mozilla and [FontDrag](https://github.com/ryanseddon/font-dragr)
- Initiated by [Dave Crossland](http://understandingfonts.com)
- Developed by [Pablo Impallari](http://impallari.com)
- Designed by [Pablo Cosgaya](http://omnibus-type.com)
- Kerning string by [James Montalbano](http://terminaldesign.com)
- Kern King Tab content from http://logofontandlettering.com/kernking.html
- Pangrams from [Wikipedia](http://en.wikipedia.org/wiki/List_of_pangrams)
- Armenian Pangrams by [Hrant Papazian](https://twitter.com/hhpapazian)
- Latin Languages texts by [Eduardo Tunni](http://tipo.net.ar)
- Latin02 Diacritics tabs from [Context of Diacritics](http://urtd.net/projects/cod)
- Cyrillic Version by [Alexei Vanyashin](http://www.cyreal.org)
- Most Devanagari content by [Girish Dalvi, Ek Type](http://ektype.in) and [Pooja Saxena](http://www.poojasaxena.in)
- Devanagari Dictionary words from http://sanskritdocuments.org/hindi/dict/eng-hin_unic.html (Thanks to [Andres Torresi and Juan Pablo del Peral](http://www.huertatipografica.com))
- Tamil Version by [Tharique Azeez](http://thariqueazeez.com), text are from [Niram blog](tamil.niram.org)
- Kannada Version by [Erin McLaughlin](http://erinmclaughlin.com), sample texts from Miguel Sousa's [AdhesionText Kannada](http://www.adhesiontext.com/kannada/), and [Kannada Prahba](http://www.kannadaprabha.com/) newspaper
- Telugu Version by [Appaji Ambarisha Darbha](https://github.com/appajid)
- Hebrew Version by [Meir Sadan](http://meirsadan.com/)
- Malayan Version by [Santhosh Thottingal](http://thottingal.in/)
- And many more people that helped in one way or another (If I've forgotten to include your name, just let me know and I will add it).

License: 

Code is available under the MIT License, see [LICENSE.md](LICENSE.md) for full details

Page text is available under the Creative Commons Attribution-ShareAlike v3.0 License
