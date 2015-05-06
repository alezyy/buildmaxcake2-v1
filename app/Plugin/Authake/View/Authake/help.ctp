<?php
$this->Html->addCrumb('Authake Help', $this->Html->url( null, true )); ?>
<div id="content">
	<div class="container">
		<div class="section">
			<div class="section-header">
				<h3>Authake Help</h3>
			</div>
			<div class="section-body">
				<p>Created by Mutlu Tevfik Koçak 2012, based on Authake Plugin. Other authors are: Nick Chankov, Jerome Combaz and many others.</p>
				<div class="page-header">
					<h3>Regex Help <small>Based on TextMate help</small></h3>
				</div>

					<h1><a name="regular_expressions">20</a> Regular Expressions</h1>

					<h2><a name="introduction">20.1</a> Introduction</h2>

					<p>A regular expression is a domain specific language for matching text. Naively we could write a small program to match text, but this is error-prone, tedious and not very portable or flexible.</p>

					<p>Instead we use regular expressions which describe the match as a string which (in a simple case) consists of the character types to match and quantifiers for how many times we want to have the character type matched.</p>

					<p>For example normal letters and digits match literally. Something like <code>\w</code> will match word characters, where <code>\s</code> will match whitespace characters (space, tab, newline, etc.). The period (<code>.</code>) will match any character (except newline).</p>

					<p>The basic quantifiers are the asterisk (<code>*</code>) to specify that the match should happen zero or more times, plus (<code>+</code>) for one or more times, or a range can be given as <code>{min,max}</code>.</p>

					<p>This alone gives us capabilities like finding words (<code>\w+</code>) or finding an image tag with an <code>alt</code> argument (<code>&lt;img.*alt=".*"&gt;</code>).</p>

					<p>Matching longer text sequences is one thing, but often we are interested in the subset of the match. For example, in the above example we may want to replace the <code>alt</code> argument text. If we enclose part of the regular expression with parentheses, we <em>capture</em> that part in a variable that can be used in the replacement string. The format of the replacement string is described at the end of this section, but to refer to the first capture, we use <code>$1</code>, <code>$2</code> for the second etc.</p>

					<p>So to change the <code>alt</code> argument text we could search for <code>(&lt;img.*alt=").*("&gt;)</code> and replace that with <code>$1Text Intentionally Removed$2</code>.</p>

					<p><em>Note that in the examples above <code>.*</code> is used. The asterisk operator is however greedy, meaning that it will match as many characters as possible (which still allow a match to occur), so often we want to change it to non-greedy by adding <code>?</code>, making it <code>.*?</code>.</em></p>

					<h3><a name="external_resources">20.1.1</a> External Resources</h3>

					<ul>
					<li><a href="http://www.regular-expressions.info/">Regular-Expressions.info</a></li>
					<li>A.M. Kuchling’s <a href="http://www.amk.ca/python/howto/regex/">Regular Expression HOWTO</a></li>
					<li>Steve Mansour’s <a href="http://linuxreviews.org/beginner/tao_of_regular_expressions/">A Tao of Regular Expressions</a></li>
					<li>Jeffrey Friedl’s <a href="http://www.oreilly.com/catalog/regex2/">Mastering Regular Expressions</a> (book)</li>
					</ul>

					<h2><a name="regular_expressions_in_textmate">20.2</a> Regular Expressions in TextMate</h2>

					<p>Here is a list of places where TextMate makes use of regular expressions:</p>

					<ul>
					<li>Filtering which files should be shown in folder references (added to projects) is done by providing regular expressions.</li>
					<li>Find and Find in Project both allow regular expression replacements.</li>
					<li>Folding markers are found via regular expressions.</li>
					<li>Indentation calculations are based on regular expression matches.</li>
					<li>Language grammars are basically a tree (with cycles) that have regular expressions in each node.</li>
					<li>Snippets allow regular expression replacements to be applied to variables and (in realtime) mirrored placeholders.</li>
					</ul>

					<p>So needless to say, these play a big role in TextMate. While you can live a happy life without knowing about them, it is strongly recommended that you do pick up a book, tutorial or similar to get better acquainted with these (if you are not already).</p>

					<p>In addition to TextMate, many common shell commands support regular expressions (<code>sed</code>, <code>grep</code>, <code>awk</code>, <code>find</code>) and popular scripting languages like Perl and Ruby have regular expressions ingrained deep into the language.</p>

					<h2><a name="syntax_oniguruma">20.3</a> Syntax (Oniguruma)</h2>

					<p>TextMate uses the Oniguruma regular expression library by K. Kosako.</p>

					<p>The following is taken from <a href="http://www.geocities.jp/kosako3/oniguruma/doc/RE.txt">http://www.geocities.jp/kosako3/oniguruma/doc/RE.txt</a>.</p>

	<pre><code>Oniguruma Regular Expressions Version 5.6.0    2007/04/03

	syntax: ONIG_SYNTAX_RUBY (default)


	1. Syntax elements

	  \       escape (enable or disable meta character meaning)
	  |       alternation
	  (...)   group
	  [...]   character class  


	2. Characters

	  \t           horizontal tab (0x09)
	  \v           vertical tab   (0x0B)
	  \n           newline        (0x0A)
	  \r           return         (0x0D)
	  \b           back space     (0x08)
	  \f           form feed      (0x0C)
	  \a           bell           (0x07)
	  \e           escape         (0x1B)
	  \nnn         octal char            (encoded byte value)
	  \xHH         hexadecimal char      (encoded byte value)
	  \x{7HHHHHHH} wide hexadecimal char (character code point value)
	  \cx          control char          (character code point value)
	  \C-x         control char          (character code point value)
	  \M-x         meta  (x|0x80)        (character code point value)
	  \M-\C-x      meta control char     (character code point value)

	 (* \b is effective in character class [...] only)


	3. Character types

	  .        any character (except newline)

	  \w       word character

	           Not Unicode:
	             alphanumeric, "_" and multibyte char. 

	           Unicode:
	             General_Category -- (Letter|Mark|Number|Connector_Punctuation)

	  \W       non word char

	  \s       whitespace char

	           Not Unicode:
	             \t, \n, \v, \f, \r, \x20

	           Unicode:
	             0009, 000A, 000B, 000C, 000D, 0085(NEL), 
	             General_Category -- Line_Separator
	                              -- Paragraph_Separator
	                              -- Space_Separator

	  \S       non whitespace char

	  \d       decimal digit char

	           Unicode: General_Category -- Decimal_Number

	  \D       non decimal digit char

	  \h       hexadecimal digit char   [0-9a-fA-F]

	  \H       non hexadecimal digit char


	  Character Property

	    * \p{property-name}
	    * \p{^property-name}    (negative)
	    * \P{property-name}     (negative)

	    property-name:

	     + works on all encodings
	       Alnum, Alpha, Blank, Cntrl, Digit, Graph, Lower,
	       Print, Punct, Space, Upper, XDigit, Word, ASCII,

	     + works on EUC_JP, Shift_JIS
	       Hiragana, Katakana

	     + works on UTF8, UTF16, UTF32
	       Any, Assigned, C, Cc, Cf, Cn, Co, Cs, L, Ll, Lm, Lo, Lt, Lu,
	       M, Mc, Me, Mn, N, Nd, Nl, No, P, Pc, Pd, Pe, Pf, Pi, Po, Ps,
	       S, Sc, Sk, Sm, So, Z, Zl, Zp, Zs, 
	       Arabic, Armenian, Bengali, Bopomofo, Braille, Buginese,
	       Buhid, Canadian_Aboriginal, Cherokee, Common, Coptic,
	       Cypriot, Cyrillic, Deseret, Devanagari, Ethiopic, Georgian,
	       Glagolitic, Gothic, Greek, Gujarati, Gurmukhi, Han, Hangul,
	       Hanunoo, Hebrew, Hiragana, Inherited, Kannada, Katakana,
	       Kharoshthi, Khmer, Lao, Latin, Limbu, Linear_B, Malayalam,
	       Mongolian, Myanmar, New_Tai_Lue, Ogham, Old_Italic, Old_Persian,
	       Oriya, Osmanya, Runic, Shavian, Sinhala, Syloti_Nagri, Syriac,
	       Tagalog, Tagbanwa, Tai_Le, Tamil, Telugu, Thaana, Thai, Tibetan,
	       Tifinagh, Ugaritic, Yi



	4. Quantifier

	  greedy

	    ?       1 or 0 times
	    *       0 or more times
	    +       1 or more times
	    {n,m}   at least n but not more than m times
	    {n,}    at least n times
	    {,n}    at least 0 but not more than n times ({0,n})
	    {n}     n times

	  reluctant

	    ??      1 or 0 times
	    *?      0 or more times
	    +?      1 or more times
	    {n,m}?  at least n but not more than m times  
	    {n,}?   at least n times
	    {,n}?   at least 0 but not more than n times (== {0,n}?)

	  possessive (greedy and does not backtrack after repeated)

	    ?+      1 or 0 times
	    *+      0 or more times
	    ++      1 or more times

	    ({n,m}+, {n,}+, {n}+ are possessive op. in ONIG_SYNTAX_JAVA only)

	    ex. /a*+/ === /(?&gt;a*)/


	5. Anchors

	  ^       beginning of the line
	  $       end of the line
	  \b      word boundary
	  \B      not word boundary
	  \A      beginning of string
	  \Z      end of string, or before newline at the end
	  \z      end of string
	  \G      matching start position 


	6. Character class

	  ^...    negative class (lowest precedence operator)
	  x-y     range from x to y
	  [...]   set (character class in character class)
	  ..&amp;&amp;..  intersection (low precedence at the next of ^)

	    ex. [a-w&amp;&amp;[^c-g]z] ==&gt; ([a-w] AND ([^c-g] OR z)) ==&gt; [abh-w]

	  * If you want to use '[', '-', ']' as a normal character
	    in a character class, you should escape these characters by '\'.


	  POSIX bracket ([:xxxxx:], negate [:^xxxxx:])

	    Not Unicode Case:

	      alnum    alphabet or digit char
	      alpha    alphabet
	      ascii    code value: [0 - 127]
	      blank    \t, \x20
	      cntrl
	      digit    0-9
	      graph    include all of multibyte encoded characters
	      lower
	      print    include all of multibyte encoded characters
	      punct
	      space    \t, \n, \v, \f, \r, \x20
	      upper
	      xdigit   0-9, a-f, A-F
	      word     alphanumeric, "_" and multibyte characters


	    Unicode Case:

	      alnum    Letter | Mark | Decimal_Number
	      alpha    Letter | Mark
	      ascii    0000 - 007F
	      blank    Space_Separator | 0009
	      cntrl    Control | Format | Unassigned | Private_Use | Surrogate
	      digit    Decimal_Number
	      graph    [[:^space:]] &amp;&amp; ^Control &amp;&amp; ^Unassigned &amp;&amp; ^Surrogate
	      lower    Lowercase_Letter
	      print    [[:graph:]] | [[:space:]]
	      punct    Connector_Punctuation | Dash_Punctuation | Close_Punctuation |
	               Final_Punctuation | Initial_Punctuation | Other_Punctuation |
	               Open_Punctuation
	      space    Space_Separator | Line_Separator | Paragraph_Separator |
	               0009 | 000A | 000B | 000C | 000D | 0085
	      upper    Uppercase_Letter
	      xdigit   0030 - 0039 | 0041 - 0046 | 0061 - 0066
	               (0-9, a-f, A-F)
	      word     Letter | Mark | Decimal_Number | Connector_Punctuation



	7. Extended groups

	  (?#...)            comment

	  (?imx-imx)         option on/off
	                         i: ignore case
	                         m: multi-line (dot(.) match newline)
	                         x: extended form
	  (?imx-imx:subexp)  option on/off for subexp

	  (?:subexp)         not captured group
	  (subexp)           captured group

	  (?=subexp)         look-ahead
	  (?!subexp)         negative look-ahead
	  (?&lt;=subexp)        look-behind
	  (?&lt;!subexp)        negative look-behind

	                     Subexp of look-behind must be fixed character length.
	                     But different character length is allowed in top level
	                     alternatives only.
	                     ex. (?&lt;=a|bc) is OK. (?&lt;=aaa(?:b|cd)) is not allowed.

	                     In negative-look-behind, captured group isn't allowed, 
	                     but shy group(?:) is allowed.

	  (?&gt;subexp)         atomic group
	                     don't backtrack in subexp.

	  (?&lt;name&gt;subexp), (?'name'subexp)
	                     define named group
	                     (All characters of the name must be a word character.)

	                     Not only a name but a number is assigned like a captured
	                     group.

	                     Assigning the same name as two or more subexps is allowed.
	                     In this case, a subexp call can not be performed although
	                     the back reference is possible.


	8. Back reference

	  \n          back reference by group number (n &gt;= 1)
	  \k&lt;name&gt;    back reference by group name
	  \k'name'    back reference by group name

	  In the back reference by the multiplex definition name,
	  a subexp with a large number is referred to preferentially.
	  (When not matched, a group of the small number is referred to.)

	  * Back reference by group number is forbidden if named group is defined 
	    in the pattern and ONIG_OPTION_CAPTURE_GROUP is not setted.


	  back reference with nest level

	    \k&lt;name+n&gt;     n: 0, 1, 2, ...
	    \k&lt;name-n&gt;     n: 0, 1, 2, ...
	    \k'name+n'     n: 0, 1, 2, ...
	    \k'name-n'     n: 0, 1, 2, ...

	    Destinate relative nest level from back reference position.    

	    ex 1.

	      /\A(?&lt;a&gt;|.|(?:(?&lt;b&gt;.)\g&lt;a&gt;\k&lt;b+0&gt;))\z/.match("reer")

	    ex 2.

	      r = Regexp.compile(&lt;&lt;'__REGEXP__'.strip, Regexp::EXTENDED)
	      (?&lt;element&gt; \g&lt;stag&gt; \g&lt;content&gt;* \g&lt;etag&gt; ){0}
	      (?&lt;stag&gt; &lt; \g&lt;name&gt; \s* &gt; ){0}
	      (?&lt;name&gt; [a-zA-Z_:]+ ){0}
	      (?&lt;content&gt; [^&lt;&amp;]+ (\g&lt;element&gt; | [^&lt;&amp;]+)* ){0}
	      (?&lt;etag&gt; &lt;/ \k&lt;name+1&gt; &gt;){0}
	      \g&lt;element&gt;
	      __REGEXP__

	      p r.match('&lt;foo&gt;f&lt;bar&gt;bbb&lt;/bar&gt;f&lt;/foo&gt;').captures



	9. Subexp call ("Tanaka Akira special")

	  \g&lt;name&gt;    call by group name
	  \g'name'    call by group name
	  \g&lt;n&gt;       call by group number (n &gt;= 1)
	  \g'n'       call by group number (n &gt;= 1)

	  * left-most recursive call is not allowed.
	     ex. (?&lt;name&gt;a|\g&lt;name&gt;b)   =&gt; error
	         (?&lt;name&gt;a|b\g&lt;name&gt;c)  =&gt; OK

	  * Call by group number is forbidden if named group is defined in the pattern
	    and ONIG_OPTION_CAPTURE_GROUP is not setted.

	  * If the option status of called group is different from calling position
	    then the group's option is effective.

	    ex. (?-i:\g&lt;name&gt;)(?i:(?&lt;name&gt;a)){0}  match to "A"


	10. Captured group

	  Behavior of the no-named group (...) changes with the following conditions.
	  (But named group is not changed.)

	  case 1. /.../     (named group is not used, no option)

	     (...) is treated as a captured group.

	  case 2. /.../g    (named group is not used, 'g' option)

	     (...) is treated as a no-captured group (?:...).

	  case 3. /..(?&lt;name&gt;..)../   (named group is used, no option)

	     (...) is treated as a no-captured group (?:...).
	     numbered-backref/call is not allowed.

	  case 4. /..(?&lt;name&gt;..)../G  (named group is used, 'G' option)

	     (...) is treated as a captured group.
	     numbered-backref/call is allowed.

	  where
	    g: ONIG_OPTION_DONT_CAPTURE_GROUP
	    G: ONIG_OPTION_CAPTURE_GROUP

	  ('g' and 'G' options are argued in ruby-dev ML)



	-----------------------------
	A-1. Syntax depend options

	   + ONIG_SYNTAX_RUBY
	     (?m): dot(.) match newline

	   + ONIG_SYNTAX_PERL and ONIG_SYNTAX_JAVA
	     (?s): dot(.) match newline
	     (?m): ^ match after newline, $ match before newline


	A-2. Original extensions

	   + hexadecimal digit char type  \h, \H
	   + named group                  (?&lt;name&gt;...), (?'name'...)
	   + named backref                \k&lt;name&gt;
	   + subexp call                  \g&lt;name&gt;, \g&lt;group-num&gt;


	A-3. Lacked features compare with perl 5.8.0

	   + \N{name}
	   + \l,\u,\L,\U, \X, \C
	   + (?{code})
	   + (??{code})
	   + (?(condition)yes-pat|no-pat)

	   * \Q...\E
	     This is effective on ONIG_SYNTAX_PERL and ONIG_SYNTAX_JAVA.


	A-4. Differences with Japanized GNU regex(version 0.12) of Ruby 1.8

	   + add character property (\p{property}, \P{property})
	   + add hexadecimal digit char type (\h, \H)
	   + add look-behind
	     (?&lt;=fixed-char-length-pattern), (?&lt;!fixed-char-length-pattern)
	   + add possessive quantifier. ?+, *+, ++
	   + add operations in character class. [], &amp;&amp;
	     ('[' must be escaped as an usual char in character class.)
	   + add named group and subexp call.
	   + octal or hexadecimal number sequence can be treated as 
	     a multibyte code char in character class if multibyte encoding
	     is specified.
	     (ex. [\xa1\xa2], [\xa1\xa7-\xa4\xa1])
	   + allow the range of single byte char and multibyte char in character
	     class.
	     ex. /[a-&lt;&lt;any EUC-JP character&gt;&gt;]/ in EUC-JP encoding.
	   + effect range of isolated option is to next ')'.
	     ex. (?:(?i)a|b) is interpreted as (?:(?i:a|b)), not (?:(?i:a)|b).
	   + isolated option is not transparent to previous pattern.
	     ex. a(?i)* is a syntax error pattern.
	   + allowed incompleted left brace as an usual string.
	     ex. /{/, /({)/, /a{2,3/ etc...
	   + negative POSIX bracket [:^xxxx:] is supported.
	   + POSIX bracket [:ascii:] is added.
	   + repeat of look-ahead is not allowed.
	     ex. /(?=a)*/, /(?!b){5}/
	   + Ignore case option is effective to numbered character.
	     ex. /\x61/i =~ "A"
	   + In the range quantifier, the number of the minimum is omissible.
	     /a{,n}/ == /a{0,n}/
	     The simultanious abbreviation of the number of times of the minimum
	     and the maximum is not allowed. (/a{,}/)
	   + /a{n}?/ is not a non-greedy operator.
	     /a{n}?/ == /(?:a{n})?/
	   + invalid back reference is checked and cause error.
	     /\1/, /(a)\2/
	   + Zero-length match in infinite repeat stops the repeat,
	     then changes of the capture group status are checked as stop condition.
	     /(?:()|())*\1\2/ =~ ""
	     /(?:\1a|())*/ =~ "a"


	A-5. Disabled functions by default syntax

	   + capture history

	     (?@...) and (?@&lt;name&gt;...)

	     ex. /(?@a)*/.match("aaa") ==&gt; [&lt;0-1&gt;, &lt;1-2&gt;, &lt;2-3&gt;]

	     see sample/listcap.c file.


	A-6. Problems

	   + Invalid encoding byte sequence is not checked in UTF-8.

	     * Invalid first byte is treated as a character.
	       /./u =~ "\xa3"

	     * Incomplete byte sequence is not checked.
	       /\w+/ =~ "a\xf3\x8ec"

	// END
	</code></pre>

					<h2><a name="replacement_string_syntax_format_strings">20.4</a> Replacement String Syntax (Format Strings)</h2>

					<p>When you perform a regular expression replace, the replace string is interpreted as a format string which can reference captures, perform case foldings, do conditional insertions (based on capture registers) and support a minimal amount of escape sequences.</p>

					<h3><a name="captures">20.4.1</a> Captures</h3>

					<p>To reference a capture, use <code>$n</code> where <code>n</code> is the capture register number. Using <code>$0</code> means the entire match.</p>

					<p>Example:</p>

					<pre><code>   Find: &lt;img src="(.*?)"&gt;
					Replace: &lt;img src="$1" alt="$1"&gt;
					</code></pre>

					<h3><a name="case_foldings">20.4.2</a> Case Foldings</h3>

					<p>It is possible to convert the next character to upper or lowercase by prepending it with <code>\u</code> or <code>\l</code>. This is mainly useful when the next character stems from a capture register. Example:</p>

					<pre><code>   Find: (&lt;a.*?&gt;)(.*?)(&lt;/a&gt;)
					Replace: $1\u$2$3
					</code></pre>

					<p>You can also convert a longer sequence to upper or lowercase by using <code>\U</code> or <code>\L</code> and then <code>\E</code> to disable the case folding again. Example:</p>

					<pre><code>   Find: (&lt;a.*?&gt;)(.*?)(&lt;/a&gt;)
					Replace: $1\U$2\E$3
					</code></pre>

					<h3><a name="conditional_insertions">20.4.3</a> Conditional Insertions</h3>

					<p>There are times where the replacements depends on whether or not something was matched. This can be done using <code>(?«n»:«insertion»)</code> to insert <code>«insertion»</code> if capture <code>«n»</code> was matched. You can also use <code>(?«n»:«insertion»:«otherwise»)</code> to have <code>«otherwise»</code> inserted when capture <code>«n»</code> was not matched.</p>

					<p>To make a capture conditional either place it in an alternation, e.g. <code>foo|(bar)|fud</code> or append a question mark to it: <code>(bar)?</code>. Note that <code>(.*)</code> will result in a match, even when zero characters are matched, so use <code>(.+)?</code> instead.</p>

					<p>So for example if we wish to truncate text to eight words and insert ellipsis only if there were more than eight words, we can use:</p>

					<pre><code>   Find: (\w+(?:\W+\w+){,7})\W*(.+)?
					Replace: $1(?2:…)
					</code></pre>

					<p>Here we first match a word (<code>\w+</code>) followed by up to seven words (<code>(?:\W+\w+){,7}</code>) each preceded by non-word characters (spacing). Then optionally put anything following that (separated by non-word characters) into capture register 2 (<code>(.+)?</code>).</p>

					<p>The replacement first inserts the (up to) eight words matched (<code>$1</code>) and then only if capture 2 matched something, ellipsis (<code>(?2:…)</code>).</p>

					<h3><a name="escape_codes">20.4.4</a> Escape Codes</h3>

					<p>In addition to the case folding escape codes, you can insert a newline character with <code>\n</code>, a tab character with <code>\t</code> and a dollar sign with <code>\$</code>.</p>
								</div>

		</div>
	</div>
</div>