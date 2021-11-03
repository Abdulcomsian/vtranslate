@extends('layouts.master' ,['page_title' => 'Post a Job'])
@section('content')
<section id="profileBanner">
   <h3>Post A Job</h3>
</section>
<section id="postJobDiv" class="padd-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-9">
            <div class="commonDiv">
               <div class="headingSection">
                  <h3>Job Posting or Editing</h3>
               </div>
               <div class="selectionBox">
                  <p>Because this is your first job posting and no agency is associated with your profile, some of the form fields are hidden to make the process of posting a job easier. If you want to fill out the full form, please select the Full form option.</p>
                  <div class="radoBtn">
                     <input type="radio" id="html" name="fav_language" value="Full form" checked>
                     <label for="html">Full form with all fields</label><br>
                     <input type="radio" id="css" name="fav_language" value="Simple form">
                     <label for="css">Simple form</label><br>
                  </div>
               </div>
               <div class="fullForm">
                  <div class="inputDiv editJob">
                     <label for="">Edit Job</label>
                     <input class="form-control" type="text" name="edit_job" id="edit_job" placeholder="Job Title" required="required" value="0">
                     <button>Load</button>
                  </div>
                  <form action="{{route('post-a-job')}}" method="post">
                     @csrf
                     <div class="inputDiv">
                        <label for="">Job Title <span class="required">*</span></label>
                        <input class="form-control" type="text" name="job_title" id="job_title" placeholder="Job Title" required="required">
                     </div>
                     <!-- <div class="inputDiv">
                        <label for="">Job Budget <span class="required">*</span></label>
                        <input min="0" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" class="form-control" type="number" name="job_budget" id="job_budget" placeholder="Budget" required="required">
                        </div> -->
                     <div class="inputDiv">
                        <label for="">Job Description <span class="required">*</span></label>
                        <textarea class="form-control" name="job_desc" id="job_desc" cols="30" rows="10" required></textarea>
                     </div>
                     <p class="hint">
                        Max. 2500 characters, incl. spaces.<br>(Short description of the project, required expertise, payment, and any other relevant information. Please provide as many details as possible regarding the specific subject matter of your project. Do not enter "technical", "medical", "legal", etc. — please be specific: e.g., "manual for a vacuum cleaner", "an article from Scientific American on new advances in cancer treatment", "a lease agreement from Spain", etc. Please also provide translators with an exact or approximate word count of your document.)
                     </p>
                     <div class="languageDiv">
                        <h5>Job Types</h5>
                        <div class="multiple-select">
                           <select name="job_type" class="form-control p-0" required>
                              <option value="">Select Service</option>
                              <option value="Closed captioning">Closed captioning</option>
                              <option value="Copywriting">Copywriting</option>
                              <option value="Desktop publishing">Desktop publishing</option>
                              <option value="Editing">Editing</option>
                              <option value="Interpreting">Interpreting</option>
                              <option value="Interpreting – conference">Interpreting – conference</option>
                              <option value="Interpreting – court/legal">Interpreting – court/legal</option>
                              <option value="Interpreting – medical">Interpreting – medical</option>
                              <option value="Interpreting – phone">Interpreting – phone</option>
                              <option value="Interpreting – sign language">Interpreting – sign language</option>
                              <option value="Localization">Localization</option>
                              <option value="Other">Other</option>
                              <option value="Project management">Project management</option>
                              <option value="Proofreading">Proofreading</option>
                              <option value="Research">Research</option>
                              <option value="Subtitling">Subtitling</option>
                              <option value="Teaching">Teaching</option>
                              <option value="Technical Review">Technical Review</option>
                              <option value="Technical writing">Technical writing</option>
                              <option value="Terminology research">Terminology research</option>
                              <option value="Transcription">Transcription</option>
                              <option value="Translation">Translation</option>
                              <option value="Typesetting">Typesetting</option>
                              <option value="Voice-over">Voice-over</option>
                           </select>
                        </div>
                        <div class="radioDiv">
                           <input type="radio" id="Intermediate" name="job_type_level" value="Intermediate" checked>
                           <label for="Intermediate">Intermediate</label>
                           <input type="radio" id="Potential" name="job_type_level" value="Potential">
                           <label for="Potential">Potential</label>
                           <input type="radio" id="In-House" name="job_type_level" value="In-House">
                           <label for="In-House">In-House</label>
                           <input type="radio" id="Tele-Community" name="job_type_level" value="Tele-Community">
                           <label for="Tele-Community">Tele-Community</label>
                        </div>
                        <p><b>Expalanation of Job Types</b></p>
                        <h5>Deadlines</h5>
                        <div class="radioDiv">
                           <input type="radio" id="No-dealine" name="expiry_status" value="0" checked>
                           <label for="No-dealine">No-dealine</label>
                           <input type="radio" id="Set-Date" name="expiry_status" value="1">
                           <label for="Set Date">Set Date</label>
                        </div>
                        <div class="setDateDiv">
                           <input class="form-control" type="date" name="expiry_date" />
                        </div>
                     </div>
                     <div class="languageDiv">
                        <h5>Languages</h5>
                        <p class="warning">At least one language pair is required.</p>
                        <p>Please include both language pairs if you need an interpreter. For example, if you need an English-French interpreter, select English>French
                           and French>English.
                        </p>
                        <div class="multiple-select pairlng">
                           <div class="row">
                              <div class="col-md-4">
                                 <select class="form-control" id="from_language" name="from_language[]" required>
                                    <option value="">Select Language</option>
                                    <option value="af">Afrikaans</option>
                                    <option value="sq">Albanian - shqip</option>
                                    <option value="am">Amharic - አማርኛ</option>
                                    <option value="ar">Arabic - العربية</option>
                                    <option value="an">Aragonese - aragonés</option>
                                    <option value="hy">Armenian - հայերեն</option>
                                    <option value="ast">Asturian - asturianu</option>
                                    <option value="az">Azerbaijani - azərbaycan dili</option>
                                    <option value="eu">Basque - euskara</option>
                                    <option value="be">Belarusian - беларуская</option>
                                    <option value="bn">Bengali - বাংলা</option>
                                    <option value="bs">Bosnian - bosanski</option>
                                    <option value="br">Breton - brezhoneg</option>
                                    <option value="bg">Bulgarian - български</option>
                                    <option value="ca">Catalan - català</option>
                                    <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                    <option value="zh">Chinese - 中文</option>
                                    <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                    <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                    <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                    <option value="co">Corsican</option>
                                    <option value="hr">Croatian - hrvatski</option>
                                    <option value="cs">Czech - čeština</option>
                                    <option value="da">Danish - dansk</option>
                                    <option value="nl">Dutch - Nederlands</option>
                                    <option value="en">English</option>
                                    <option value="en-AU">English (Australia)</option>
                                    <option value="en-CA">English (Canada)</option>
                                    <option value="en-IN">English (India)</option>
                                    <option value="en-NZ">English (New Zealand)</option>
                                    <option value="en-ZA">English (South Africa)</option>
                                    <option value="en-GB">English (United Kingdom)</option>
                                    <option value="en-US">English (United States)</option>
                                    <option value="eo">Esperanto - esperanto</option>
                                    <option value="et">Estonian - eesti</option>
                                    <option value="fo">Faroese - føroyskt</option>
                                    <option value="fil">Filipino</option>
                                    <option value="fi">Finnish - suomi</option>
                                    <option value="fr">French - français</option>
                                    <option value="fr-CA">French (Canada) - français (Canada)</option>
                                    <option value="fr-FR">French (France) - français (France)</option>
                                    <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                    <option value="gl">Galician - galego</option>
                                    <option value="ka">Georgian - ქართული</option>
                                    <option value="de">German - Deutsch</option>
                                    <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                    <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                    <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                    <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                    <option value="el">Greek - Ελληνικά</option>
                                    <option value="gn">Guarani</option>
                                    <option value="gu">Gujarati - ગુજરાતી</option>
                                    <option value="ha">Hausa</option>
                                    <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                    <option value="he">Hebrew - עברית</option>
                                    <option value="hi">Hindi - हिन्दी</option>
                                    <option value="hu">Hungarian - magyar</option>
                                    <option value="is">Icelandic - íslenska</option>
                                    <option value="id">Indonesian - Indonesia</option>
                                    <option value="ia">Interlingua</option>
                                    <option value="ga">Irish - Gaeilge</option>
                                    <option value="it">Italian - italiano</option>
                                    <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                    <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                    <option value="ja">Japanese - 日本語</option>
                                    <option value="kn">Kannada - ಕನ್ನಡ</option>
                                    <option value="kk">Kazakh - қазақ тілі</option>
                                    <option value="km">Khmer - ខ្មែរ</option>
                                    <option value="ko">Korean - 한국어</option>
                                    <option value="ku">Kurdish - Kurdî</option>
                                    <option value="ky">Kyrgyz - кыргызча</option>
                                    <option value="lo">Lao - ລາວ</option>
                                    <option value="la">Latin</option>
                                    <option value="lv">Latvian - latviešu</option>
                                    <option value="ln">Lingala - lingála</option>
                                    <option value="lt">Lithuanian - lietuvių</option>
                                    <option value="mk">Macedonian - македонски</option>
                                    <option value="ms">Malay - Bahasa Melayu</option>
                                    <option value="ml">Malayalam - മലയാളം</option>
                                    <option value="mt">Maltese - Malti</option>
                                    <option value="mr">Marathi - मराठी</option>
                                    <option value="mn">Mongolian - монгол</option>
                                    <option value="ne">Nepali - नेपाली</option>
                                    <option value="no">Norwegian - norsk</option>
                                    <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                    <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                    <option value="oc">Occitan</option>
                                    <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                    <option value="om">Oromo - Oromoo</option>
                                    <option value="ps">Pashto - پښتو</option>
                                    <option value="fa">Persian - فارسی</option>
                                    <option value="pl">Polish - polski</option>
                                    <option value="pt">Portuguese - português</option>
                                    <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                    <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                    <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                    <option value="qu">Quechua</option>
                                    <option value="ro">Romanian - română</option>
                                    <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                    <option value="rm">Romansh - rumantsch</option>
                                    <option value="ru">Russian - русский</option>
                                    <option value="gd">Scottish Gaelic</option>
                                    <option value="sr">Serbian - српски</option>
                                    <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                    <option value="sn">Shona - chiShona</option>
                                    <option value="sd">Sindhi</option>
                                    <option value="si">Sinhala - සිංහල</option>
                                    <option value="sk">Slovak - slovenčina</option>
                                    <option value="sl">Slovenian - slovenščina</option>
                                    <option value="so">Somali - Soomaali</option>
                                    <option value="st">Southern Sotho</option>
                                    <option value="es">Spanish - español</option>
                                    <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                    <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                    <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                    <option value="es-ES">Spanish (Spain) - español (España)</option>
                                    <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                    <option value="su">Sundanese</option>
                                    <option value="sw">Swahili - Kiswahili</option>
                                    <option value="sv">Swedish - svenska</option>
                                    <option value="tg">Tajik - тоҷикӣ</option>
                                    <option value="ta">Tamil - தமிழ்</option>
                                    <option value="tt">Tatar</option>
                                    <option value="te">Telugu - తెలుగు</option>
                                    <option value="th">Thai - ไทย</option>
                                    <option value="ti">Tigrinya - ትግርኛ</option>
                                    <option value="to">Tongan - lea fakatonga</option>
                                    <option value="tr">Turkish - Türkçe</option>
                                    <option value="tk">Turkmen</option>
                                    <option value="tw">Twi</option>
                                    <option value="uk">Ukrainian - українська</option>
                                    <option value="ur">Urdu - اردو</option>
                                    <option value="ug">Uyghur</option>
                                    <option value="uz">Uzbek - o‘zbek</option>
                                    <option value="vi">Vietnamese - Tiếng Việt</option>
                                    <option value="wa">Walloon - wa</option>
                                    <option value="cy">Welsh - Cymraeg</option>
                                    <option value="fy">Western Frisian</option>
                                    <option value="xh">Xhosa</option>
                                    <option value="yi">Yiddish</option>
                                    <option value="yo">Yoruba - Èdè Yorùbá</option>
                                    <option value="zu">Zulu - isiZulu</option>
                                 </select>
                              </div>
                              <div class="col-md-1">
                                 <span>>></span>
                              </div>
                              <div class="col-md-4">
                                 <select class="form-control" id="to_language" name="to_language[]" required>
                                    <option value="">Select Language</option>
                                    <option value="af">Afrikaans</option>
                                    <option value="sq">Albanian - shqip</option>
                                    <option value="am">Amharic - አማርኛ</option>
                                    <option value="ar">Arabic - العربية</option>
                                    <option value="an">Aragonese - aragonés</option>
                                    <option value="hy">Armenian - հայերեն</option>
                                    <option value="ast">Asturian - asturianu</option>
                                    <option value="az">Azerbaijani - azərbaycan dili</option>
                                    <option value="eu">Basque - euskara</option>
                                    <option value="be">Belarusian - беларуская</option>
                                    <option value="bn">Bengali - বাংলা</option>
                                    <option value="bs">Bosnian - bosanski</option>
                                    <option value="br">Breton - brezhoneg</option>
                                    <option value="bg">Bulgarian - български</option>
                                    <option value="ca">Catalan - català</option>
                                    <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                    <option value="zh">Chinese - 中文</option>
                                    <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                    <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                    <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                    <option value="co">Corsican</option>
                                    <option value="hr">Croatian - hrvatski</option>
                                    <option value="cs">Czech - čeština</option>
                                    <option value="da">Danish - dansk</option>
                                    <option value="nl">Dutch - Nederlands</option>
                                    <option value="en">English</option>
                                    <option value="en-AU">English (Australia)</option>
                                    <option value="en-CA">English (Canada)</option>
                                    <option value="en-IN">English (India)</option>
                                    <option value="en-NZ">English (New Zealand)</option>
                                    <option value="en-ZA">English (South Africa)</option>
                                    <option value="en-GB">English (United Kingdom)</option>
                                    <option value="en-US">English (United States)</option>
                                    <option value="eo">Esperanto - esperanto</option>
                                    <option value="et">Estonian - eesti</option>
                                    <option value="fo">Faroese - føroyskt</option>
                                    <option value="fil">Filipino</option>
                                    <option value="fi">Finnish - suomi</option>
                                    <option value="fr">French - français</option>
                                    <option value="fr-CA">French (Canada) - français (Canada)</option>
                                    <option value="fr-FR">French (France) - français (France)</option>
                                    <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                    <option value="gl">Galician - galego</option>
                                    <option value="ka">Georgian - ქართული</option>
                                    <option value="de">German - Deutsch</option>
                                    <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                    <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                    <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                    <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                    <option value="el">Greek - Ελληνικά</option>
                                    <option value="gn">Guarani</option>
                                    <option value="gu">Gujarati - ગુજરાતી</option>
                                    <option value="ha">Hausa</option>
                                    <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                    <option value="he">Hebrew - עברית</option>
                                    <option value="hi">Hindi - हिन्दी</option>
                                    <option value="hu">Hungarian - magyar</option>
                                    <option value="is">Icelandic - íslenska</option>
                                    <option value="id">Indonesian - Indonesia</option>
                                    <option value="ia">Interlingua</option>
                                    <option value="ga">Irish - Gaeilge</option>
                                    <option value="it">Italian - italiano</option>
                                    <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                    <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                    <option value="ja">Japanese - 日本語</option>
                                    <option value="kn">Kannada - ಕನ್ನಡ</option>
                                    <option value="kk">Kazakh - қазақ тілі</option>
                                    <option value="km">Khmer - ខ្មែរ</option>
                                    <option value="ko">Korean - 한국어</option>
                                    <option value="ku">Kurdish - Kurdî</option>
                                    <option value="ky">Kyrgyz - кыргызча</option>
                                    <option value="lo">Lao - ລາວ</option>
                                    <option value="la">Latin</option>
                                    <option value="lv">Latvian - latviešu</option>
                                    <option value="ln">Lingala - lingála</option>
                                    <option value="lt">Lithuanian - lietuvių</option>
                                    <option value="mk">Macedonian - македонски</option>
                                    <option value="ms">Malay - Bahasa Melayu</option>
                                    <option value="ml">Malayalam - മലയാളം</option>
                                    <option value="mt">Maltese - Malti</option>
                                    <option value="mr">Marathi - मराठी</option>
                                    <option value="mn">Mongolian - монгол</option>
                                    <option value="ne">Nepali - नेपाली</option>
                                    <option value="no">Norwegian - norsk</option>
                                    <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                    <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                    <option value="oc">Occitan</option>
                                    <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                    <option value="om">Oromo - Oromoo</option>
                                    <option value="ps">Pashto - پښتو</option>
                                    <option value="fa">Persian - فارسی</option>
                                    <option value="pl">Polish - polski</option>
                                    <option value="pt">Portuguese - português</option>
                                    <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                    <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                    <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                    <option value="qu">Quechua</option>
                                    <option value="ro">Romanian - română</option>
                                    <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                    <option value="rm">Romansh - rumantsch</option>
                                    <option value="ru">Russian - русский</option>
                                    <option value="gd">Scottish Gaelic</option>
                                    <option value="sr">Serbian - српски</option>
                                    <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                    <option value="sn">Shona - chiShona</option>
                                    <option value="sd">Sindhi</option>
                                    <option value="si">Sinhala - සිංහල</option>
                                    <option value="sk">Slovak - slovenčina</option>
                                    <option value="sl">Slovenian - slovenščina</option>
                                    <option value="so">Somali - Soomaali</option>
                                    <option value="st">Southern Sotho</option>
                                    <option value="es">Spanish - español</option>
                                    <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                    <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                    <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                    <option value="es-ES">Spanish (Spain) - español (España)</option>
                                    <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                    <option value="su">Sundanese</option>
                                    <option value="sw">Swahili - Kiswahili</option>
                                    <option value="sv">Swedish - svenska</option>
                                    <option value="tg">Tajik - тоҷикӣ</option>
                                    <option value="ta">Tamil - தமிழ்</option>
                                    <option value="tt">Tatar</option>
                                    <option value="te">Telugu - తెలుగు</option>
                                    <option value="th">Thai - ไทย</option>
                                    <option value="ti">Tigrinya - ትግርኛ</option>
                                    <option value="to">Tongan - lea fakatonga</option>
                                    <option value="tr">Turkish - Türkçe</option>
                                    <option value="tk">Turkmen</option>
                                    <option value="tw">Twi</option>
                                    <option value="uk">Ukrainian - українська</option>
                                    <option value="ur">Urdu - اردو</option>
                                    <option value="ug">Uyghur</option>
                                    <option value="uz">Uzbek - o‘zbek</option>
                                    <option value="vi">Vietnamese - Tiếng Việt</option>
                                    <option value="wa">Walloon - wa</option>
                                    <option value="cy">Welsh - Cymraeg</option>
                                    <option value="fy">Western Frisian</option>
                                    <option value="xh">Xhosa</option>
                                    <option value="yi">Yiddish</option>
                                    <option value="yo">Yoruba - Èdè Yorùbá</option>
                                    <option value="zu">Zulu - isiZulu</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <button type="button" class="commonBtn addpair">Add Language Pair</button>
                     </div>
                     <div class="subjectMatter">
                        <div class="scroll" id="fldJobSpecCnt">
                           <ol>
                              <li style="margin-top: 15px;">
                                 <a href="#0"><b>Technology &amp; Engineering, Natural &amp;amp; Applied Sciences</b></a>
                                 <ol>
                                    <li class="Small" style="margin-top: 5px;"><a href="#0_0">Computers, Software and Data Processing</a></li>
                                    <li class="Small" style="margin-top: 5px;"><a href="#0_1">Applied Sciences, Technology and Engineering. Communication, Computers, Chemical Industry, Manufacturing, Military Science, Naval Science, Transport</a></li>
                                    <li class="Small" style="margin-top: 5px;"><a href="#0_2">Agriculture, Fisheries, Farming, Food Industry, Forestry, Housekeeping and Hospitality, Stockbreeding, Wildlife Exploration</a></li>
                                    <li class="Small" style="margin-top: 5px;"><a href="#0_3">Medicine, Health</a></li>
                                    <li class="Small" style="margin-top: 5px;"><a href="#0_4">Mathematics and Natural Sciences: Astronomy, Biology, Botany, Chemistry, Geology, Meteorology, Physics, Zoology</a></li>
                                 </ol>
                              </li>
                              <li style="margin-top: 15px;">
                                 <a href="#1"><b>Philosophy &amp;amp; Psychology, Religion &amp;amp; Social Sciences, Arts &amp;amp; Literature, Geography &amp;amp; History, Law</b></a>
                                 <ol>
                                    <li class="Small" style="margin-top: 5px;"><a href="#1_5">Social Sciences, Accounting, Business, Economics, Education, Finance, Government, Law, Political Science</a></li>
                                    <li class="Small" style="margin-top: 5px;"><a href="#1_6">Generalities, Anthropology, Archaeology, Geography, History, Philosophy, Psychology, Religion, Theology</a></li>
                                    <li class="Small" style="margin-top: 5px;"><a href="#1_7">Arts, Music, Language, Linguistics, Literature, Recreation, Entertainment, Architecture, Photography, Cinematography</a></li>
                                 </ol>
                              </li>
                           </ol>
                           <input type="checkbox" name="sp9999" value="0"><b>Unknown or Any Subject Matter</b><br><br>
                           <ol>
                              <li style="margin-top: 15px;">
                                 <b id="0">Technology &amp; Engineering, Natural &amp;amp; Applied Sciences</b>
                                 <ol>
                                    <li class="Small" style="margin-top: 15px;"><b id="0_0">Computers, Software and Data Processing<br></b><input type="checkbox" name="sp42" value="45">Computer and Information Sciences<br><input type="checkbox" name="sp43" value="46">Computer Engineering<br><input type="checkbox" name="sp47" value="140">Data Communications<br><input type="checkbox" name="sp48" value="141">Data Processing<br><input type="checkbox" name="sp81" value="79">Information Sciences and Systems<br><input type="checkbox" name="sp82" value="146">Internet<br><input type="checkbox" name="sp138" value="145">Software Engineering<br></li>
                                    <li class="Small" style="margin-top: 15px;"><b id="0_1">Applied Sciences, Technology and Engineering. Communication, Computers, Chemical Industry, Manufacturing, Military Science, Naval Science, Transport<br></b><input type="checkbox" name="sp2" value="4">Aerospace Engineering<br><input type="checkbox" name="sp5" value="7">Aircraft<br><input type="checkbox" name="sp17" value="22">Automotive<br><input type="checkbox" name="sp18" value="23">Aviation<br><input type="checkbox" name="sp22" value="27">Bioengineering and Biomedical Engineering<br><input type="checkbox" name="sp29" value="34">Biotechnology<br><input type="checkbox" name="sp32" value="151">Buildings<br><input type="checkbox" name="sp38" value="149">Chemical Technology and Related Industries<br><input type="checkbox" name="sp41" value="44">Civil Engineering<br><input type="checkbox" name="sp54" value="144">Electrical Engineering<br><input type="checkbox" name="sp55" value="54">Engineering<br><input type="checkbox" name="sp60" value="59">Fibre, Textile and Weaving<br><input type="checkbox" name="sp63" value="63">Fire Protection<br><input type="checkbox" name="sp77" value="75">Heating, Air Condition and Refrigeration<br><input type="checkbox" name="sp88" value="153">Manufacturing (Metal Working and Products, Instruments, Furniture, Printing, Clothing, etc.)<br><input type="checkbox" name="sp91" value="86">Mechanical Engineering<br><input type="checkbox" name="sp107" value="89">Metallurgical Engineering<br><input type="checkbox" name="sp108" value="91">Military Technologies<br><input type="checkbox" name="sp109" value="92">Mining and Mineral Engineering<br><input type="checkbox" name="sp110" value="93">Mining and Petroleum Technology<br><input type="checkbox" name="sp114" value="97">Naval Architecture And Marine Engineering<br><input type="checkbox" name="sp115" value="99">Nuclear Engineering<br><input type="checkbox" name="sp117" value="147">Oil and Gas Engineering<br><input type="checkbox" name="sp122" value="106">Petroleum Engineering<br><input type="checkbox" name="sp133" value="120">Radio and Television Broadcasting<br><input type="checkbox" name="sp141" value="142">Telecommunications<br><input type="checkbox" name="sp142" value="127">Textile Sciences and Engineering<br><input type="checkbox" name="sp147" value="132">Transportation<br></li>
                                    <li class="Small" style="margin-top: 15px;"><b id="0_2">Agriculture, Fisheries, Farming, Food Industry, Forestry, Housekeeping and Hospitality, Stockbreeding, Wildlife Exploration<br></b><input type="checkbox" name="sp3" value="5">Agriculture<br><input type="checkbox" name="sp4" value="6">Agronomy and Crop Science<br><input type="checkbox" name="sp7" value="11">Animal Sciences<br><input type="checkbox" name="sp10" value="15">Aquaculture<br><input type="checkbox" name="sp46" value="48">Culinary Arts<br><input type="checkbox" name="sp64" value="64">Fishing and Fisheries Sciences<br><input type="checkbox" name="sp65" value="65">Food Sciences<br><input type="checkbox" name="sp67" value="67">Forestry<br><input type="checkbox" name="sp79" value="77">Hospitality<br><input type="checkbox" name="sp146" value="130">Tourism and Travel<br></li>
                                    <li class="Small" style="margin-top: 15px;"><b id="0_3">Medicine, Health<br></b><input type="checkbox" name="sp75" value="73">Gerontology<br><input type="checkbox" name="sp76" value="74">Health<br><input type="checkbox" name="sp92" value="2">Medicine — Acupuncture and Oriental Medicine<br><input type="checkbox" name="sp93" value="49">Medicine — Dentistry<br><input type="checkbox" name="sp94" value="87">Medicine — Medical Technology<br><input type="checkbox" name="sp95" value="90">Medicine — Microbiology and Bacteriology<br><input type="checkbox" name="sp96" value="98">Medicine — Neuroscience<br><input type="checkbox" name="sp97" value="100">Medicine — Nursing<br><input type="checkbox" name="sp98" value="101">Medicine — Occupational Health and Industrial Hygiene<br><input type="checkbox" name="sp99" value="103">Medicine — Ophthalmology<br><input type="checkbox" name="sp100" value="107">Medicine — Pharmacology<br><input type="checkbox" name="sp101" value="116">Medicine — Psychiatry<br><input type="checkbox" name="sp102" value="118">Medicine — Public Health Education and Promotion<br><input type="checkbox" name="sp103" value="123">Medicine — Social Psychology<br><input type="checkbox" name="sp104" value="131">Medicine — Toxicology<br><input type="checkbox" name="sp105" value="143">Medicine (General)<br><input type="checkbox" name="sp127" value="112">Physical Education Teaching and Coaching<br><input type="checkbox" name="sp139" value="125">Sport and Fitness<br><input type="checkbox" name="sp148" value="133">Veterinary<br></li>
                                    <li class="Small" style="margin-top: 15px;"><b id="0_4">Mathematics and Natural Sciences: Astronomy, Biology, Botany, Chemistry, Geology, Meteorology, Physics, Zoology<br></b><input type="checkbox" name="sp6" value="10">Anatomy<br><input type="checkbox" name="sp9" value="14">Applied Mathematics<br><input type="checkbox" name="sp14" value="19">Astronomy<br><input type="checkbox" name="sp15" value="20">Astrophysics<br><input type="checkbox" name="sp16" value="21">Atmospheric Sciences and Meteorology<br><input type="checkbox" name="sp21" value="26">Biochemistry<br><input type="checkbox" name="sp23" value="28">Biology<br><input type="checkbox" name="sp24" value="29">Biomedical<br><input type="checkbox" name="sp25" value="30">Biometrics<br><input type="checkbox" name="sp26" value="31">Biophysics<br><input type="checkbox" name="sp27" value="32">Biopsychology<br><input type="checkbox" name="sp28" value="33">Biostatistics<br><input type="checkbox" name="sp30" value="35">Botany<br><input type="checkbox" name="sp36" value="40">Cartography<br><input type="checkbox" name="sp39" value="42">Chemistry<br><input type="checkbox" name="sp51" value="52">Ecology<br><input type="checkbox" name="sp56" value="55">Entomology<br><input type="checkbox" name="sp58" value="57">Environmental Science<br><input type="checkbox" name="sp70" value="68">Genetics<br><input type="checkbox" name="sp71" value="69">Geochemistry<br><input type="checkbox" name="sp73" value="71">Geology<br><input type="checkbox" name="sp74" value="72">Geophysics and Seismology<br><input type="checkbox" name="sp89" value="84">Marine and Aquatic Biology<br><input type="checkbox" name="sp90" value="85">Mathematics<br><input type="checkbox" name="sp111" value="94">Molecular Biology<br><input type="checkbox" name="sp116" value="102">Oceanography<br><input type="checkbox" name="sp118" value="104">Optics<br><input type="checkbox" name="sp119" value="105">Organic Chemistry<br><input type="checkbox" name="sp121" value="148">Petrochemistry<br><input type="checkbox" name="sp126" value="111">Physical and Theoretical Chemistry<br><input type="checkbox" name="sp128" value="113">Physics<br><input type="checkbox" name="sp130" value="115">Polymer Chemistry<br><input type="checkbox" name="sp132" value="119">Radiation Biology<br><input type="checkbox" name="sp145" value="129">Theoretical and Mathematical Physics<br><input type="checkbox" name="sp151" value="136">Zoology<br></li>
                                 </ol>
                              </li>
                              <li style="margin-top: 15px;">
                                 <b id="1">Philosophy &amp;amp; Psychology, Religion &amp;amp; Social Sciences, Arts &amp;amp; Literature, Geography &amp;amp; History, Law</b>
                                 <ol>
                                    <li class="Small" style="margin-top: 15px;"><b id="1_5">Social Sciences, Accounting, Business, Economics, Education, Finance, Government, Law, Political Science<br></b><input type="checkbox" name="sp1" value="3">Advertising<br><input type="checkbox" name="sp19" value="24">Banking and Financial<br><input type="checkbox" name="sp33" value="37">Business Administration and Management<br><input type="checkbox" name="sp34" value="38">Business General<br><input type="checkbox" name="sp35" value="39">Business Marketing<br><input type="checkbox" name="sp40" value="43">Child Care<br><input type="checkbox" name="sp45" value="47">Criminology<br><input type="checkbox" name="sp52" value="13">Economics<br><input type="checkbox" name="sp53" value="53">Education<br><input type="checkbox" name="sp57" value="56">Entrepreneurship<br><input type="checkbox" name="sp59" value="58">Ethnic and Cultural Studies<br><input type="checkbox" name="sp62" value="62">Finance<br><input type="checkbox" name="sp66" value="66">Forensic Science<br><input type="checkbox" name="sp80" value="78">Humanities and Humanistic Studies<br><input type="checkbox" name="sp85" value="82">Law and Legal<br><input type="checkbox" name="sp120" value="139">Patent Translation<br><input type="checkbox" name="sp129" value="114">Political Science<br><input type="checkbox" name="sp137" value="124">Sociology<br><input type="checkbox" name="sp140" value="126">Taxation<br><input type="checkbox" name="sp150" value="135">Women Studies<br></li>
                                    <li class="Small" style="margin-top: 15px;"><b id="1_6">Generalities, Anthropology, Archaeology, Geography, History, Philosophy, Psychology, Religion, Theology<br></b><input type="checkbox" name="sp8" value="12">Anthropology<br><input type="checkbox" name="sp11" value="16">Archaeology<br><input type="checkbox" name="sp20" value="25">Bible and Biblical Studies<br><input type="checkbox" name="sp72" value="70">Geography<br><input type="checkbox" name="sp78" value="8">History<br><input type="checkbox" name="sp83" value="80">Islamic Studies<br><input type="checkbox" name="sp106" value="88">Medieval and Renaissance Studies<br><input type="checkbox" name="sp123" value="108">Philosophy<br><input type="checkbox" name="sp131" value="117">Psychology<br><input type="checkbox" name="sp134" value="109">Religion<br><input type="checkbox" name="sp135" value="121">Religion and Religious Studies<br><input type="checkbox" name="sp144" value="128">Theology and Theological Studies<br></li>
                                    <li class="Small" style="margin-top: 15px;"><b id="1_7">Arts, Music, Language, Linguistics, Literature, Recreation, Entertainment, Architecture, Photography, Cinematography<br></b><input type="checkbox" name="sp0" value="1">Acting and Directing<br><input type="checkbox" name="sp12" value="17">Architecture<br><input type="checkbox" name="sp13" value="18">Art<br><input type="checkbox" name="sp31" value="36">Broadcast Journalism<br><input type="checkbox" name="sp37" value="41">Ceramics Arts and Ceramics<br><input type="checkbox" name="sp44" value="150">Computer Games and Gambling, Electronic Games, Games of Chance<br><input type="checkbox" name="sp49" value="50">Design and Applied Arts<br><input type="checkbox" name="sp50" value="138">Desktop Publishing (DTP)<br><input type="checkbox" name="sp61" value="60">Film and Cinema Studies<br><input type="checkbox" name="sp68" value="76">Genealogy/Family History Research<br><input type="checkbox" name="sp84" value="81">Journalism and Mass Communication<br><input type="checkbox" name="sp86" value="83">Linguistics<br><input type="checkbox" name="sp87" value="9">Literature<br><input type="checkbox" name="sp112" value="95">Music<br><input type="checkbox" name="sp113" value="96">Music History and Literature<br><input type="checkbox" name="sp124" value="61">Photographic Arts<br><input type="checkbox" name="sp125" value="110">Photography<br><input type="checkbox" name="sp143" value="51">Theatre<br><input type="checkbox" name="sp149" value="134">Visual and Performing Arts<br></li>
                                 </ol>
                              </li>
                           </ol>
                        </div>
                     </div>
                     <div style="padding: 15px 50px">
                        <p>Select one or several subjects, but less than 20.</p>
                        <p>Use Dewey Decimal Classification (DDC) Outline and Subject Index for reference and comparison.</p>
                        <div class="requiredSoftware">
                           <div class="d-flex lableDiv">
                              <img src="{{asset( 'assets/img/panelOpen.gif' )}}" alt="">
                              <p style="margin: 0px;">Required software</p>
                           </div>
                           <div class="viewDiv">
                              <table width="100%">
                                 <tbody>
                                    <tr>
                                       <td nowrap="nowrap" valign="top">
                                          <div class="Small"><input type="checkbox" id="Soft30" name="Soft30">Across<br><input type="checkbox" id="Soft24" name="Soft24">Adobe Acrobat<br><input type="checkbox" id="Soft32" name="Soft32">Adobe Captivate<br><input type="checkbox" id="Soft23" name="Soft23">Adobe Illustrator<br><input type="checkbox" id="Soft15" name="Soft15">Adobe InDesign<br><input type="checkbox" id="Soft25" name="Soft25">Adobe Photoshop<br><input type="checkbox" id="Soft16" name="Soft16">AidTrans Studio<br><input type="checkbox" id="Soft33" name="Soft33">AutoCAD<br><input type="checkbox" id="Soft1" name="Soft1">Déjà Vu<br><input type="checkbox" id="Soft20" name="Soft20">Heartsome Translation Suite<br><input type="checkbox" id="Soft2" name="Soft2">IBM TranslationManager<br><input type="checkbox" id="Soft29" name="Soft29">Idiom WorldServer<br><input type="checkbox" id="Soft3" name="Soft3">JCAT<br><input type="checkbox" id="Soft19" name="Soft19">MemoQ<br><input type="checkbox" id="Soft4" name="Soft4">MetaTexis<br></div>
                                       </td>
                                       <td nowrap="nowrap" valign="top">
                                          <div class="Small"><input type="checkbox" id="Soft31" name="Soft31">MultiCorpora<br><input type="checkbox" id="Soft5" name="Soft5">MultiTrans<br><input type="checkbox" id="Soft17" name="Soft17">OmegaT<br><input type="checkbox" id="Soft18" name="Soft18">Open Language Tools<br><input type="checkbox" id="Soft9" name="Soft9">PageMaker<br><input type="checkbox" id="Soft6" name="Soft6">PASSOLO<br><input type="checkbox" id="Soft7" name="Soft7">PowerPoint<br><input type="checkbox" id="Soft8" name="Soft8">QuarkXPress<br><input type="checkbox" id="Soft22" name="Soft22">Robohelp<br><input type="checkbox" id="Soft10" name="Soft10">SDLX Translation Suite<br><input type="checkbox" id="Soft11" name="Soft11">STAR Transit<br><input type="checkbox" id="Soft12" name="Soft12">TRADOS<br><input type="checkbox" id="Soft13" name="Soft13">TRANS Suite 2000<br><input type="checkbox" id="Soft21" name="Soft21">TransAssist<br><input type="checkbox" id="Soft14" name="Soft14">Wordfast<br></div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <div class="offeredRate">
                           <div class="d-flex lableDiv">
                              <img src="{{asset( 'assets/img/panelOpen.gif' )}}" alt="">
                              <p style="margin: 0px;">Offered rate (optional)</p>
                           </div>
                           <div class="viewDiv">
                              <table>
                                 <tbody>
                                    <tr>
                                       <td style="white-space:nowrap;">
                                          <input type="text" name="Rate" style="text-align: right; width: 65px;" size="4" maxlength="9" value="">&nbsp;
                                          <select style="width: 120px;" id="Currency" name="Currency">
                                             <option value="27" tc:rt="0.8649">Euro</option>
                                             <option value="1" tc:rt="1">US dollars</option>
                                             <option value="2" tc:rt="1.2389">Canadian dollars</option>
                                             <option value="3" tc:rt="0.7303">British pounds</option>
                                             <option value="6" tc:rt="113.9698">Japanese yen</option>
                                             <option value="10" tc:rt="137.9445">Algerian dinars</option>
                                             <option value="11" tc:rt="99.6891">Argentine pesos</option>
                                             <option value="12" tc:rt="1.3299">Australian dollars</option>
                                             <option value="14" tc:rt="1">Bahamian dollars</option>
                                             <option value="15" tc:rt="2">Barbadian dollar</option>
                                             <option value="17" tc:rt="1">Bermudian dollar</option>
                                             <option value="18" tc:rt="5.6378">Brazilian real</option>
                                             <option value="19" tc:rt="1.6916">Bulgarian leva</option>
                                             <option value="20" tc:rt="813.5836">Chilean pesos</option>
                                             <option value="21" tc:rt="6.403">Chinese yuan</option>
                                             <option value="23" tc:rt="22.186">Czech koruny</option>
                                             <option value="24" tc:rt="6.4347">Danish kroner</option>
                                             <option value="26" tc:rt="15.6933">Egyptian pounds</option>
                                             <option value="28" tc:rt="2.0798">Fijian dollars</option>
                                             <option value="31" tc:rt="7.7792">Hong Kong dollars</option>
                                             <option value="32" tc:rt="311.3294">Hungarian forint</option>
                                             <option value="33" tc:rt="128.6874">Icelandic krónur</option>
                                             <option value="34" tc:rt="74.9362">Indian rupees</option>
                                             <option value="35" tc:rt="14176.86">Indonesian rupiahs</option>
                                             <option value="37" tc:rt="3.1623">Israeli new shekels</option>
                                             <option value="38" tc:rt="153.9366">Jamaican dollars</option>
                                             <option value="39" tc:rt="0.709">Jordanian dinars</option>
                                             <option value="22" tc:rt="0.6476">Latvian lats</option>
                                             <option value="41" tc:rt="1507.5">Lebanese pounds</option>
                                             <option value="56" tc:rt="3.1818">Lithuanian litas</option>
                                             <option value="43" tc:rt="4.1412">Malaysian ringgits</option>
                                             <option value="44" tc:rt="20.5564">Mexican pesos</option>
                                             <option value="61" tc:rt="27.8696">New Taiwan dollars</option>
                                             <option value="46" tc:rt="1.395">New Zealand dollars</option>
                                             <option value="47" tc:rt="8.4421">Norway Kroner</option>
                                             <option value="48" tc:rt="171.6788">Pakistani rupees</option>
                                             <option value="49" tc:rt="50.5507">Philippine pesos</option>
                                             <option value="50" tc:rt="3.9868">Polish zlotych</option>
                                             <option value="52" tc:rt="4.2806">Romanian leu</option>
                                             <option value="53" tc:rt="70.8759">Russian rubles</option>
                                             <option value="54" tc:rt="3.75">Saudi riyals</option>
                                             <option value="55" tc:rt="1.3488">Singapore dollars</option>
                                             <option value="57" tc:rt="15.2342">South African rand</option>
                                             <option value="40" tc:rt="1175.03">South Korean won</option>
                                             <option value="59" tc:rt="8.597">Swedish kronor</option>
                                             <option value="9" tc:rt="0.9156">Swiss francs</option>
                                             <option value="62" tc:rt="33.2786">Thai baht</option>
                                             <option value="63" tc:rt="9.6048">Turkish liras</option>
                                             <option value="64" tc:rt="26.4422">Ukrainian hryvnia</option>
                                          </select>
                                          &nbsp;
                                          <select id="Payment" name="Payment">
                                             <option selected="selected" value="0">per word</option>
                                             <option value="1">per hour</option>
                                          </select>
                                       </td>
                                       <td class="jfn">
                                          <a target="_blank" href="tools.asp?pn=currency"><b>Currency Converter</b></a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <p class="jfn">Please enter only translation rate here. If it's editing or proofreading, please make a note about your rate in the Project Description box. <b>Jobs mentioning translation rates less than US$ 0.05/word may be removed from the Job Board without notice.</b></p>
                              <p class="jfn"><b>Note:</b> For Japanese source language, please enter translation rate per Japanese character instead of rate per word.</p>
                           </div>
                        </div>
                        <div class="jobLocation">
                           <div class="d-flex lableDiv">
                              <img src="{{asset( 'assets/img/panelOpen.gif' )}}" alt="">
                              <p style="margin: 0px;">Job Location</p>
                           </div>
                           <div class="viewDiv">
                              <div id="jpSecLocation" style="display: block;">
                                 <div class="fv">
                                    <table style="width:100%">
                                       <tbody>
                                          <tr>
                                             <td>country</td>
                                             <td>city</td>
                                             <td>state/region</td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <select id="Country" name="Country" class="country">
                                                   <option value="0">---Any country---</option>
                                                   <option value="1">Afghanistan</option>
                                                   <option value="2">Albania</option>
                                                   <option value="3">Algeria</option>
                                                   <option value="4">Andorra</option>
                                                   <option value="5">Angola</option>
                                                   <option value="6" title="Antigua and Barbuda">Antigua and Barbuda</option>
                                                   <option value="7">Argentina</option>
                                                   <option value="8">Armenia</option>
                                                   <option value="9">Australia</option>
                                                   <option value="10">Austria</option>
                                                   <option value="11">Azerbaijan</option>
                                                   <option value="12">Bahamas</option>
                                                   <option value="13">Bahrain</option>
                                                   <option value="14">Bangladesh</option>
                                                   <option value="15">Barbados</option>
                                                   <option value="16">Belarus</option>
                                                   <option value="17">Belgium</option>
                                                   <option value="18">Belize</option>
                                                   <option value="19">Benin</option>
                                                   <option value="20">Bhutan</option>
                                                   <option value="21">Bolivia</option>
                                                   <option value="22" title="Bosnia and Herz.">Bosnia and Herz.</option>
                                                   <option value="23">Botswana</option>
                                                   <option value="24">Brazil</option>
                                                   <option value="25">Brunei</option>
                                                   <option value="26">Bulgaria</option>
                                                   <option value="27">Burkina Faso</option>
                                                   <option value="28">Burundi</option>
                                                   <option value="29">Cambodia</option>
                                                   <option value="30">Cameroon</option>
                                                   <option value="31">Canada</option>
                                                   <option value="32">Cape Verde</option>
                                                   <option value="33" title="Central African Rep.">Central African Rep.</option>
                                                   <option value="34">Chad</option>
                                                   <option value="35">Chile</option>
                                                   <option value="36">China</option>
                                                   <option value="37">Colombia</option>
                                                   <option value="38">Comoros</option>
                                                   <option value="39" title="Congo, The Democr. Rep. of the">Congo, The Democr. Rep. of the</option>
                                                   <option value="41">Costa Rica</option>
                                                   <option value="46">Cote d'Ivoire</option>
                                                   <option value="42">Croatia</option>
                                                   <option value="43">Cuba</option>
                                                   <option value="44">Cyprus</option>
                                                   <option value="45">Czech Republic</option>
                                                   <option value="47">Denmark</option>
                                                   <option value="48">Djibouti</option>
                                                   <option value="49">Dominica</option>
                                                   <option value="50" title="Dominican Republic">Dominican Republic</option>
                                                   <option value="203">East Timor</option>
                                                   <option value="51">Ecuador</option>
                                                   <option value="52">Egypt</option>
                                                   <option value="53">El Salvador</option>
                                                   <option value="54" title="Equatorial Guinea">Equatorial Guinea</option>
                                                   <option value="55">Eritrea</option>
                                                   <option value="56">Estonia</option>
                                                   <option value="57">Ethiopia</option>
                                                   <option value="58">Fiji</option>
                                                   <option value="59">Finland</option>
                                                   <option value="60">France</option>
                                                   <option value="205" title="French Polynesia">French Polynesia</option>
                                                   <option value="61">Gabon</option>
                                                   <option value="62">Gambia, The</option>
                                                   <option value="63">Georgia</option>
                                                   <option value="64">Germany</option>
                                                   <option value="65">Ghana</option>
                                                   <option value="204">Gibraltar</option>
                                                   <option value="66">Greece</option>
                                                   <option value="40">Greenland</option>
                                                   <option value="67">Grenada</option>
                                                   <option value="195">Guadeloupe</option>
                                                   <option value="68">Guatemala</option>
                                                   <option value="69">Guinea</option>
                                                   <option value="70">Guinea-Bissau</option>
                                                   <option value="71">Guyana</option>
                                                   <option value="72">Haiti</option>
                                                   <option value="73">Honduras</option>
                                                   <option value="208">Hong Kong SAR</option>
                                                   <option value="74">Hungary</option>
                                                   <option value="75">Iceland</option>
                                                   <option value="76">India</option>
                                                   <option value="77">Indonesia</option>
                                                   <option value="78">Iran</option>
                                                   <option value="79">Iraq</option>
                                                   <option value="80">Ireland</option>
                                                   <option value="81">Israel</option>
                                                   <option value="82">Italy</option>
                                                   <option value="83">Jamaica</option>
                                                   <option value="84">Japan</option>
                                                   <option value="85">Jordan</option>
                                                   <option value="86">Kazakhstan</option>
                                                   <option value="87">Kenya</option>
                                                   <option value="88">Kiribati</option>
                                                   <option value="89">Korea, North</option>
                                                   <option value="90">Korea, South</option>
                                                   <option value="91">Kuwait</option>
                                                   <option value="92">Kyrgyzstan</option>
                                                   <option value="93">Laos</option>
                                                   <option value="94">Latvia</option>
                                                   <option value="95">Lebanon</option>
                                                   <option value="96">Lesotho</option>
                                                   <option value="97">Liberia</option>
                                                   <option value="98">Libya</option>
                                                   <option value="99">Liechtenstein</option>
                                                   <option value="100">Lithuania</option>
                                                   <option value="101">Luxembourg</option>
                                                   <option value="207">Macau SAR</option>
                                                   <option value="102">Macedonia</option>
                                                   <option value="103">Madagascar</option>
                                                   <option value="104">Malawi</option>
                                                   <option value="105">Malaysia</option>
                                                   <option value="106">Maldives</option>
                                                   <option value="107">Mali</option>
                                                   <option value="108">Malta</option>
                                                   <option value="109" title="Marshall Islands">Marshall Islands</option>
                                                   <option value="192">Martinique</option>
                                                   <option value="110">Mauritania</option>
                                                   <option value="111">Mauritius</option>
                                                   <option value="112">Mexico</option>
                                                   <option value="113" title="Micronesia, Fed. States of">Micronesia, Fed. States of</option>
                                                   <option value="114">Moldova</option>
                                                   <option value="115">Monaco</option>
                                                   <option value="116">Mongolia</option>
                                                   <option value="201">Montenegro</option>
                                                   <option value="117">Morocco</option>
                                                   <option value="118">Mozambique</option>
                                                   <option value="119">Myanmar</option>
                                                   <option value="120">Namibia</option>
                                                   <option value="121">Nauru</option>
                                                   <option value="122">Nepal</option>
                                                   <option value="123">Netherlands</option>
                                                   <option value="206">New Caledonia</option>
                                                   <option value="124">New Zealand</option>
                                                   <option value="125">Nicaragua</option>
                                                   <option value="126">Niger</option>
                                                   <option value="127">Nigeria</option>
                                                   <option value="210" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                                   <option value="128">Norway</option>
                                                   <option value="129">Oman</option>
                                                   <option value="130">Pakistan</option>
                                                   <option value="131">Palau</option>
                                                   <option value="202" title="Palestinian Territories">Palestinian Territories</option>
                                                   <option value="132">Panama</option>
                                                   <option value="133" title="Papua New Guinea">Papua New Guinea</option>
                                                   <option value="134">Paraguay</option>
                                                   <option value="135">Peru</option>
                                                   <option value="136">Philippines</option>
                                                   <option value="137">Poland</option>
                                                   <option value="138">Portugal</option>
                                                   <option value="198">Puerto Rico</option>
                                                   <option value="139">Qatar</option>
                                                   <option value="209">Réunion</option>
                                                   <option value="140">Romania</option>
                                                   <option value="141" title="Russian Federation">Russian Federation</option>
                                                   <option value="142">Rwanda</option>
                                                   <option value="143" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                   <option value="144">Saint Lucia</option>
                                                   <option value="146">Samoa</option>
                                                   <option value="147">San Marino</option>
                                                   <option value="148" title="Sao Tome and Princ.">Sao Tome and Princ.</option>
                                                   <option value="149">Saudi Arabia</option>
                                                   <option value="150">Senegal</option>
                                                   <option value="191">Serbia</option>
                                                   <option value="151">Seychelles</option>
                                                   <option value="152">Sierra Leone</option>
                                                   <option value="153">Singapore</option>
                                                   <option value="154">Slovakia</option>
                                                   <option value="155">Slovenia</option>
                                                   <option value="156">Solomon Islands</option>
                                                   <option value="157">Somalia</option>
                                                   <option value="158">South Africa</option>
                                                   <option value="159">Spain</option>
                                                   <option value="160">Sri Lanka</option>
                                                   <option value="145" title="St Vincent and Gren.">St Vincent and Gren.</option>
                                                   <option value="161">Sudan</option>
                                                   <option value="162">Suriname</option>
                                                   <option value="163">Swaziland</option>
                                                   <option value="164">Sweden</option>
                                                   <option value="165">Switzerland</option>
                                                   <option value="166">Syria</option>
                                                   <option value="167">Taiwan</option>
                                                   <option value="168">Tajikistan</option>
                                                   <option value="169">Tanzania</option>
                                                   <option value="170">Thailand</option>
                                                   <option value="171">Togo</option>
                                                   <option value="172">Tonga</option>
                                                   <option value="173" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                                   <option value="174">Tunisia</option>
                                                   <option value="175">Turkey</option>
                                                   <option value="176">Turkmenistan</option>
                                                   <option value="177">Tuvalu</option>
                                                   <option value="178">Uganda</option>
                                                   <option value="179">Ukraine</option>
                                                   <option value="180" title="United Arab Emirates">United Arab Emirates</option>
                                                   <option value="181">United Kingdom</option>
                                                   <option value="182">United States</option>
                                                   <option value="183">Uruguay</option>
                                                   <option value="184">Uzbekistan</option>
                                                   <option value="185">Vanuatu</option>
                                                   <option value="186">Vatican City</option>
                                                   <option value="187">Venezuela</option>
                                                   <option value="188">Vietnam</option>
                                                   <option value="199" title="Virgin Islands, British">Virgin Islands, British</option>
                                                   <option value="200" title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                   <option value="189">Western Sahara</option>
                                                   <option value="190">Yemen</option>
                                                   <option value="193">Zambia</option>
                                                   <option value="194">Zimbabwe</option>
                                                </select>
                                             </td>
                                             <td><input maxlength="50" style="width: 120px;" id="City" name="City" value=""></td>
                                             <td><input maxlength="50" style="width: 120px;" id="StateRegion" name="StateRegion" value=""></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class="jfn">(For example, for an interpretation or in-house job; please note that this field is for information only. Notification about this job will be sent only to translators living in countries selected below.)</div>
                                 </div>
                                 <div class="fn jpAux" style="display: block;">Linguists must live in:</div>
                                 <div class="fv jpAux" style="display: block;">
                                    <table style="width:100%">
                                       <tbody>
                                          <tr>
                                             <td>
                                                <select id="MustLiveIn1" name="MustLiveIn1" class="country">
                                                   <option value="0">---Any country---</option>
                                                   <option value="1">Afghanistan</option>
                                                   <option value="2">Albania</option>
                                                   <option value="3">Algeria</option>
                                                   <option value="4">Andorra</option>
                                                   <option value="5">Angola</option>
                                                   <option value="6" title="Antigua and Barbuda">Antigua and Barbuda</option>
                                                   <option value="7">Argentina</option>
                                                   <option value="8">Armenia</option>
                                                   <option value="9">Australia</option>
                                                   <option value="10">Austria</option>
                                                   <option value="11">Azerbaijan</option>
                                                   <option value="12">Bahamas</option>
                                                   <option value="13">Bahrain</option>
                                                   <option value="14">Bangladesh</option>
                                                   <option value="15">Barbados</option>
                                                   <option value="16">Belarus</option>
                                                   <option value="17">Belgium</option>
                                                   <option value="18">Belize</option>
                                                   <option value="19">Benin</option>
                                                   <option value="20">Bhutan</option>
                                                   <option value="21">Bolivia</option>
                                                   <option value="22" title="Bosnia and Herz.">Bosnia and Herz.</option>
                                                   <option value="23">Botswana</option>
                                                   <option value="24">Brazil</option>
                                                   <option value="25">Brunei</option>
                                                   <option value="26">Bulgaria</option>
                                                   <option value="27">Burkina Faso</option>
                                                   <option value="28">Burundi</option>
                                                   <option value="29">Cambodia</option>
                                                   <option value="30">Cameroon</option>
                                                   <option value="31">Canada</option>
                                                   <option value="32">Cape Verde</option>
                                                   <option value="33" title="Central African Rep.">Central African Rep.</option>
                                                   <option value="34">Chad</option>
                                                   <option value="35">Chile</option>
                                                   <option value="36">China</option>
                                                   <option value="37">Colombia</option>
                                                   <option value="38">Comoros</option>
                                                   <option value="39" title="Congo, The Democr. Rep. of the">Congo, The Democr. Rep. of the</option>
                                                   <option value="41">Costa Rica</option>
                                                   <option value="46">Cote d'Ivoire</option>
                                                   <option value="42">Croatia</option>
                                                   <option value="43">Cuba</option>
                                                   <option value="44">Cyprus</option>
                                                   <option value="45">Czech Republic</option>
                                                   <option value="47">Denmark</option>
                                                   <option value="48">Djibouti</option>
                                                   <option value="49">Dominica</option>
                                                   <option value="50" title="Dominican Republic">Dominican Republic</option>
                                                   <option value="203">East Timor</option>
                                                   <option value="51">Ecuador</option>
                                                   <option value="52">Egypt</option>
                                                   <option value="53">El Salvador</option>
                                                   <option value="54" title="Equatorial Guinea">Equatorial Guinea</option>
                                                   <option value="55">Eritrea</option>
                                                   <option value="56">Estonia</option>
                                                   <option value="57">Ethiopia</option>
                                                   <option value="58">Fiji</option>
                                                   <option value="59">Finland</option>
                                                   <option value="60">France</option>
                                                   <option value="205" title="French Polynesia">French Polynesia</option>
                                                   <option value="61">Gabon</option>
                                                   <option value="62">Gambia, The</option>
                                                   <option value="63">Georgia</option>
                                                   <option value="64">Germany</option>
                                                   <option value="65">Ghana</option>
                                                   <option value="204">Gibraltar</option>
                                                   <option value="66">Greece</option>
                                                   <option value="40">Greenland</option>
                                                   <option value="67">Grenada</option>
                                                   <option value="195">Guadeloupe</option>
                                                   <option value="68">Guatemala</option>
                                                   <option value="69">Guinea</option>
                                                   <option value="70">Guinea-Bissau</option>
                                                   <option value="71">Guyana</option>
                                                   <option value="72">Haiti</option>
                                                   <option value="73">Honduras</option>
                                                   <option value="208">Hong Kong SAR</option>
                                                   <option value="74">Hungary</option>
                                                   <option value="75">Iceland</option>
                                                   <option value="76">India</option>
                                                   <option value="77">Indonesia</option>
                                                   <option value="78">Iran</option>
                                                   <option value="79">Iraq</option>
                                                   <option value="80">Ireland</option>
                                                   <option value="81">Israel</option>
                                                   <option value="82">Italy</option>
                                                   <option value="83">Jamaica</option>
                                                   <option value="84">Japan</option>
                                                   <option value="85">Jordan</option>
                                                   <option value="86">Kazakhstan</option>
                                                   <option value="87">Kenya</option>
                                                   <option value="88">Kiribati</option>
                                                   <option value="89">Korea, North</option>
                                                   <option value="90">Korea, South</option>
                                                   <option value="91">Kuwait</option>
                                                   <option value="92">Kyrgyzstan</option>
                                                   <option value="93">Laos</option>
                                                   <option value="94">Latvia</option>
                                                   <option value="95">Lebanon</option>
                                                   <option value="96">Lesotho</option>
                                                   <option value="97">Liberia</option>
                                                   <option value="98">Libya</option>
                                                   <option value="99">Liechtenstein</option>
                                                   <option value="100">Lithuania</option>
                                                   <option value="101">Luxembourg</option>
                                                   <option value="207">Macau SAR</option>
                                                   <option value="102">Macedonia</option>
                                                   <option value="103">Madagascar</option>
                                                   <option value="104">Malawi</option>
                                                   <option value="105">Malaysia</option>
                                                   <option value="106">Maldives</option>
                                                   <option value="107">Mali</option>
                                                   <option value="108">Malta</option>
                                                   <option value="109" title="Marshall Islands">Marshall Islands</option>
                                                   <option value="192">Martinique</option>
                                                   <option value="110">Mauritania</option>
                                                   <option value="111">Mauritius</option>
                                                   <option value="112">Mexico</option>
                                                   <option value="113" title="Micronesia, Fed. States of">Micronesia, Fed. States of</option>
                                                   <option value="114">Moldova</option>
                                                   <option value="115">Monaco</option>
                                                   <option value="116">Mongolia</option>
                                                   <option value="201">Montenegro</option>
                                                   <option value="117">Morocco</option>
                                                   <option value="118">Mozambique</option>
                                                   <option value="119">Myanmar</option>
                                                   <option value="120">Namibia</option>
                                                   <option value="121">Nauru</option>
                                                   <option value="122">Nepal</option>
                                                   <option value="123">Netherlands</option>
                                                   <option value="206">New Caledonia</option>
                                                   <option value="124">New Zealand</option>
                                                   <option value="125">Nicaragua</option>
                                                   <option value="126">Niger</option>
                                                   <option value="127">Nigeria</option>
                                                   <option value="210" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                                   <option value="128">Norway</option>
                                                   <option value="129">Oman</option>
                                                   <option value="130">Pakistan</option>
                                                   <option value="131">Palau</option>
                                                   <option value="202" title="Palestinian Territories">Palestinian Territories</option>
                                                   <option value="132">Panama</option>
                                                   <option value="133" title="Papua New Guinea">Papua New Guinea</option>
                                                   <option value="134">Paraguay</option>
                                                   <option value="135">Peru</option>
                                                   <option value="136">Philippines</option>
                                                   <option value="137">Poland</option>
                                                   <option value="138">Portugal</option>
                                                   <option value="198">Puerto Rico</option>
                                                   <option value="139">Qatar</option>
                                                   <option value="209">Réunion</option>
                                                   <option value="140">Romania</option>
                                                   <option value="141" title="Russian Federation">Russian Federation</option>
                                                   <option value="142">Rwanda</option>
                                                   <option value="143" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                   <option value="144">Saint Lucia</option>
                                                   <option value="146">Samoa</option>
                                                   <option value="147">San Marino</option>
                                                   <option value="148" title="Sao Tome and Princ.">Sao Tome and Princ.</option>
                                                   <option value="149">Saudi Arabia</option>
                                                   <option value="150">Senegal</option>
                                                   <option value="191">Serbia</option>
                                                   <option value="151">Seychelles</option>
                                                   <option value="152">Sierra Leone</option>
                                                   <option value="153">Singapore</option>
                                                   <option value="154">Slovakia</option>
                                                   <option value="155">Slovenia</option>
                                                   <option value="156">Solomon Islands</option>
                                                   <option value="157">Somalia</option>
                                                   <option value="158">South Africa</option>
                                                   <option value="159">Spain</option>
                                                   <option value="160">Sri Lanka</option>
                                                   <option value="145" title="St Vincent and Gren.">St Vincent and Gren.</option>
                                                   <option value="161">Sudan</option>
                                                   <option value="162">Suriname</option>
                                                   <option value="163">Swaziland</option>
                                                   <option value="164">Sweden</option>
                                                   <option value="165">Switzerland</option>
                                                   <option value="166">Syria</option>
                                                   <option value="167">Taiwan</option>
                                                   <option value="168">Tajikistan</option>
                                                   <option value="169">Tanzania</option>
                                                   <option value="170">Thailand</option>
                                                   <option value="171">Togo</option>
                                                   <option value="172">Tonga</option>
                                                   <option value="173" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                                   <option value="174">Tunisia</option>
                                                   <option value="175">Turkey</option>
                                                   <option value="176">Turkmenistan</option>
                                                   <option value="177">Tuvalu</option>
                                                   <option value="178">Uganda</option>
                                                   <option value="179">Ukraine</option>
                                                   <option value="180" title="United Arab Emirates">United Arab Emirates</option>
                                                   <option value="181">United Kingdom</option>
                                                   <option value="182">United States</option>
                                                   <option value="183">Uruguay</option>
                                                   <option value="184">Uzbekistan</option>
                                                   <option value="185">Vanuatu</option>
                                                   <option value="186">Vatican City</option>
                                                   <option value="187">Venezuela</option>
                                                   <option value="188">Vietnam</option>
                                                   <option value="199" title="Virgin Islands, British">Virgin Islands, British</option>
                                                   <option value="200" title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                   <option value="189">Western Sahara</option>
                                                   <option value="190">Yemen</option>
                                                   <option value="193">Zambia</option>
                                                   <option value="194">Zimbabwe</option>
                                                </select>
                                                &nbsp;or
                                             </td>
                                             <td>
                                                <select id="MustLiveIn2" name="MustLiveIn2" class="country">
                                                   <option value="0">---Any country---</option>
                                                   <option value="1">Afghanistan</option>
                                                   <option value="2">Albania</option>
                                                   <option value="3">Algeria</option>
                                                   <option value="4">Andorra</option>
                                                   <option value="5">Angola</option>
                                                   <option value="6" title="Antigua and Barbuda">Antigua and Barbuda</option>
                                                   <option value="7">Argentina</option>
                                                   <option value="8">Armenia</option>
                                                   <option value="9">Australia</option>
                                                   <option value="10">Austria</option>
                                                   <option value="11">Azerbaijan</option>
                                                   <option value="12">Bahamas</option>
                                                   <option value="13">Bahrain</option>
                                                   <option value="14">Bangladesh</option>
                                                   <option value="15">Barbados</option>
                                                   <option value="16">Belarus</option>
                                                   <option value="17">Belgium</option>
                                                   <option value="18">Belize</option>
                                                   <option value="19">Benin</option>
                                                   <option value="20">Bhutan</option>
                                                   <option value="21">Bolivia</option>
                                                   <option value="22" title="Bosnia and Herz.">Bosnia and Herz.</option>
                                                   <option value="23">Botswana</option>
                                                   <option value="24">Brazil</option>
                                                   <option value="25">Brunei</option>
                                                   <option value="26">Bulgaria</option>
                                                   <option value="27">Burkina Faso</option>
                                                   <option value="28">Burundi</option>
                                                   <option value="29">Cambodia</option>
                                                   <option value="30">Cameroon</option>
                                                   <option value="31">Canada</option>
                                                   <option value="32">Cape Verde</option>
                                                   <option value="33" title="Central African Rep.">Central African Rep.</option>
                                                   <option value="34">Chad</option>
                                                   <option value="35">Chile</option>
                                                   <option value="36">China</option>
                                                   <option value="37">Colombia</option>
                                                   <option value="38">Comoros</option>
                                                   <option value="39" title="Congo, The Democr. Rep. of the">Congo, The Democr. Rep. of the</option>
                                                   <option value="41">Costa Rica</option>
                                                   <option value="46">Cote d'Ivoire</option>
                                                   <option value="42">Croatia</option>
                                                   <option value="43">Cuba</option>
                                                   <option value="44">Cyprus</option>
                                                   <option value="45">Czech Republic</option>
                                                   <option value="47">Denmark</option>
                                                   <option value="48">Djibouti</option>
                                                   <option value="49">Dominica</option>
                                                   <option value="50" title="Dominican Republic">Dominican Republic</option>
                                                   <option value="203">East Timor</option>
                                                   <option value="51">Ecuador</option>
                                                   <option value="52">Egypt</option>
                                                   <option value="53">El Salvador</option>
                                                   <option value="54" title="Equatorial Guinea">Equatorial Guinea</option>
                                                   <option value="55">Eritrea</option>
                                                   <option value="56">Estonia</option>
                                                   <option value="57">Ethiopia</option>
                                                   <option value="58">Fiji</option>
                                                   <option value="59">Finland</option>
                                                   <option value="60">France</option>
                                                   <option value="205" title="French Polynesia">French Polynesia</option>
                                                   <option value="61">Gabon</option>
                                                   <option value="62">Gambia, The</option>
                                                   <option value="63">Georgia</option>
                                                   <option value="64">Germany</option>
                                                   <option value="65">Ghana</option>
                                                   <option value="204">Gibraltar</option>
                                                   <option value="66">Greece</option>
                                                   <option value="40">Greenland</option>
                                                   <option value="67">Grenada</option>
                                                   <option value="195">Guadeloupe</option>
                                                   <option value="68">Guatemala</option>
                                                   <option value="69">Guinea</option>
                                                   <option value="70">Guinea-Bissau</option>
                                                   <option value="71">Guyana</option>
                                                   <option value="72">Haiti</option>
                                                   <option value="73">Honduras</option>
                                                   <option value="208">Hong Kong SAR</option>
                                                   <option value="74">Hungary</option>
                                                   <option value="75">Iceland</option>
                                                   <option value="76">India</option>
                                                   <option value="77">Indonesia</option>
                                                   <option value="78">Iran</option>
                                                   <option value="79">Iraq</option>
                                                   <option value="80">Ireland</option>
                                                   <option value="81">Israel</option>
                                                   <option value="82">Italy</option>
                                                   <option value="83">Jamaica</option>
                                                   <option value="84">Japan</option>
                                                   <option value="85">Jordan</option>
                                                   <option value="86">Kazakhstan</option>
                                                   <option value="87">Kenya</option>
                                                   <option value="88">Kiribati</option>
                                                   <option value="89">Korea, North</option>
                                                   <option value="90">Korea, South</option>
                                                   <option value="91">Kuwait</option>
                                                   <option value="92">Kyrgyzstan</option>
                                                   <option value="93">Laos</option>
                                                   <option value="94">Latvia</option>
                                                   <option value="95">Lebanon</option>
                                                   <option value="96">Lesotho</option>
                                                   <option value="97">Liberia</option>
                                                   <option value="98">Libya</option>
                                                   <option value="99">Liechtenstein</option>
                                                   <option value="100">Lithuania</option>
                                                   <option value="101">Luxembourg</option>
                                                   <option value="207">Macau SAR</option>
                                                   <option value="102">Macedonia</option>
                                                   <option value="103">Madagascar</option>
                                                   <option value="104">Malawi</option>
                                                   <option value="105">Malaysia</option>
                                                   <option value="106">Maldives</option>
                                                   <option value="107">Mali</option>
                                                   <option value="108">Malta</option>
                                                   <option value="109" title="Marshall Islands">Marshall Islands</option>
                                                   <option value="192">Martinique</option>
                                                   <option value="110">Mauritania</option>
                                                   <option value="111">Mauritius</option>
                                                   <option value="112">Mexico</option>
                                                   <option value="113" title="Micronesia, Fed. States of">Micronesia, Fed. States of</option>
                                                   <option value="114">Moldova</option>
                                                   <option value="115">Monaco</option>
                                                   <option value="116">Mongolia</option>
                                                   <option value="201">Montenegro</option>
                                                   <option value="117">Morocco</option>
                                                   <option value="118">Mozambique</option>
                                                   <option value="119">Myanmar</option>
                                                   <option value="120">Namibia</option>
                                                   <option value="121">Nauru</option>
                                                   <option value="122">Nepal</option>
                                                   <option value="123">Netherlands</option>
                                                   <option value="206">New Caledonia</option>
                                                   <option value="124">New Zealand</option>
                                                   <option value="125">Nicaragua</option>
                                                   <option value="126">Niger</option>
                                                   <option value="127">Nigeria</option>
                                                   <option value="210" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                                   <option value="128">Norway</option>
                                                   <option value="129">Oman</option>
                                                   <option value="130">Pakistan</option>
                                                   <option value="131">Palau</option>
                                                   <option value="202" title="Palestinian Territories">Palestinian Territories</option>
                                                   <option value="132">Panama</option>
                                                   <option value="133" title="Papua New Guinea">Papua New Guinea</option>
                                                   <option value="134">Paraguay</option>
                                                   <option value="135">Peru</option>
                                                   <option value="136">Philippines</option>
                                                   <option value="137">Poland</option>
                                                   <option value="138">Portugal</option>
                                                   <option value="198">Puerto Rico</option>
                                                   <option value="139">Qatar</option>
                                                   <option value="209">Réunion</option>
                                                   <option value="140">Romania</option>
                                                   <option value="141" title="Russian Federation">Russian Federation</option>
                                                   <option value="142">Rwanda</option>
                                                   <option value="143" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                   <option value="144">Saint Lucia</option>
                                                   <option value="146">Samoa</option>
                                                   <option value="147">San Marino</option>
                                                   <option value="148" title="Sao Tome and Princ.">Sao Tome and Princ.</option>
                                                   <option value="149">Saudi Arabia</option>
                                                   <option value="150">Senegal</option>
                                                   <option value="191">Serbia</option>
                                                   <option value="151">Seychelles</option>
                                                   <option value="152">Sierra Leone</option>
                                                   <option value="153">Singapore</option>
                                                   <option value="154">Slovakia</option>
                                                   <option value="155">Slovenia</option>
                                                   <option value="156">Solomon Islands</option>
                                                   <option value="157">Somalia</option>
                                                   <option value="158">South Africa</option>
                                                   <option value="159">Spain</option>
                                                   <option value="160">Sri Lanka</option>
                                                   <option value="145" title="St Vincent and Gren.">St Vincent and Gren.</option>
                                                   <option value="161">Sudan</option>
                                                   <option value="162">Suriname</option>
                                                   <option value="163">Swaziland</option>
                                                   <option value="164">Sweden</option>
                                                   <option value="165">Switzerland</option>
                                                   <option value="166">Syria</option>
                                                   <option value="167">Taiwan</option>
                                                   <option value="168">Tajikistan</option>
                                                   <option value="169">Tanzania</option>
                                                   <option value="170">Thailand</option>
                                                   <option value="171">Togo</option>
                                                   <option value="172">Tonga</option>
                                                   <option value="173" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                                   <option value="174">Tunisia</option>
                                                   <option value="175">Turkey</option>
                                                   <option value="176">Turkmenistan</option>
                                                   <option value="177">Tuvalu</option>
                                                   <option value="178">Uganda</option>
                                                   <option value="179">Ukraine</option>
                                                   <option value="180" title="United Arab Emirates">United Arab Emirates</option>
                                                   <option value="181">United Kingdom</option>
                                                   <option value="182">United States</option>
                                                   <option value="183">Uruguay</option>
                                                   <option value="184">Uzbekistan</option>
                                                   <option value="185">Vanuatu</option>
                                                   <option value="186">Vatican City</option>
                                                   <option value="187">Venezuela</option>
                                                   <option value="188">Vietnam</option>
                                                   <option value="199" title="Virgin Islands, British">Virgin Islands, British</option>
                                                   <option value="200" title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                   <option value="189">Western Sahara</option>
                                                   <option value="190">Yemen</option>
                                                   <option value="193">Zambia</option>
                                                   <option value="194">Zimbabwe</option>
                                                </select>
                                                &nbsp;or
                                             </td>
                                             <td>
                                                <select id="MustLiveIn3" name="MustLiveIn3" class="country">
                                                   <option value="0">---Any country---</option>
                                                   <option value="1">Afghanistan</option>
                                                   <option value="2">Albania</option>
                                                   <option value="3">Algeria</option>
                                                   <option value="4">Andorra</option>
                                                   <option value="5">Angola</option>
                                                   <option value="6" title="Antigua and Barbuda">Antigua and Barbuda</option>
                                                   <option value="7">Argentina</option>
                                                   <option value="8">Armenia</option>
                                                   <option value="9">Australia</option>
                                                   <option value="10">Austria</option>
                                                   <option value="11">Azerbaijan</option>
                                                   <option value="12">Bahamas</option>
                                                   <option value="13">Bahrain</option>
                                                   <option value="14">Bangladesh</option>
                                                   <option value="15">Barbados</option>
                                                   <option value="16">Belarus</option>
                                                   <option value="17">Belgium</option>
                                                   <option value="18">Belize</option>
                                                   <option value="19">Benin</option>
                                                   <option value="20">Bhutan</option>
                                                   <option value="21">Bolivia</option>
                                                   <option value="22" title="Bosnia and Herz.">Bosnia and Herz.</option>
                                                   <option value="23">Botswana</option>
                                                   <option value="24">Brazil</option>
                                                   <option value="25">Brunei</option>
                                                   <option value="26">Bulgaria</option>
                                                   <option value="27">Burkina Faso</option>
                                                   <option value="28">Burundi</option>
                                                   <option value="29">Cambodia</option>
                                                   <option value="30">Cameroon</option>
                                                   <option value="31">Canada</option>
                                                   <option value="32">Cape Verde</option>
                                                   <option value="33" title="Central African Rep.">Central African Rep.</option>
                                                   <option value="34">Chad</option>
                                                   <option value="35">Chile</option>
                                                   <option value="36">China</option>
                                                   <option value="37">Colombia</option>
                                                   <option value="38">Comoros</option>
                                                   <option value="39" title="Congo, The Democr. Rep. of the">Congo, The Democr. Rep. of the</option>
                                                   <option value="41">Costa Rica</option>
                                                   <option value="46">Cote d'Ivoire</option>
                                                   <option value="42">Croatia</option>
                                                   <option value="43">Cuba</option>
                                                   <option value="44">Cyprus</option>
                                                   <option value="45">Czech Republic</option>
                                                   <option value="47">Denmark</option>
                                                   <option value="48">Djibouti</option>
                                                   <option value="49">Dominica</option>
                                                   <option value="50" title="Dominican Republic">Dominican Republic</option>
                                                   <option value="203">East Timor</option>
                                                   <option value="51">Ecuador</option>
                                                   <option value="52">Egypt</option>
                                                   <option value="53">El Salvador</option>
                                                   <option value="54" title="Equatorial Guinea">Equatorial Guinea</option>
                                                   <option value="55">Eritrea</option>
                                                   <option value="56">Estonia</option>
                                                   <option value="57">Ethiopia</option>
                                                   <option value="58">Fiji</option>
                                                   <option value="59">Finland</option>
                                                   <option value="60">France</option>
                                                   <option value="205" title="French Polynesia">French Polynesia</option>
                                                   <option value="61">Gabon</option>
                                                   <option value="62">Gambia, The</option>
                                                   <option value="63">Georgia</option>
                                                   <option value="64">Germany</option>
                                                   <option value="65">Ghana</option>
                                                   <option value="204">Gibraltar</option>
                                                   <option value="66">Greece</option>
                                                   <option value="40">Greenland</option>
                                                   <option value="67">Grenada</option>
                                                   <option value="195">Guadeloupe</option>
                                                   <option value="68">Guatemala</option>
                                                   <option value="69">Guinea</option>
                                                   <option value="70">Guinea-Bissau</option>
                                                   <option value="71">Guyana</option>
                                                   <option value="72">Haiti</option>
                                                   <option value="73">Honduras</option>
                                                   <option value="208">Hong Kong SAR</option>
                                                   <option value="74">Hungary</option>
                                                   <option value="75">Iceland</option>
                                                   <option value="76">India</option>
                                                   <option value="77">Indonesia</option>
                                                   <option value="78">Iran</option>
                                                   <option value="79">Iraq</option>
                                                   <option value="80">Ireland</option>
                                                   <option value="81">Israel</option>
                                                   <option value="82">Italy</option>
                                                   <option value="83">Jamaica</option>
                                                   <option value="84">Japan</option>
                                                   <option value="85">Jordan</option>
                                                   <option value="86">Kazakhstan</option>
                                                   <option value="87">Kenya</option>
                                                   <option value="88">Kiribati</option>
                                                   <option value="89">Korea, North</option>
                                                   <option value="90">Korea, South</option>
                                                   <option value="91">Kuwait</option>
                                                   <option value="92">Kyrgyzstan</option>
                                                   <option value="93">Laos</option>
                                                   <option value="94">Latvia</option>
                                                   <option value="95">Lebanon</option>
                                                   <option value="96">Lesotho</option>
                                                   <option value="97">Liberia</option>
                                                   <option value="98">Libya</option>
                                                   <option value="99">Liechtenstein</option>
                                                   <option value="100">Lithuania</option>
                                                   <option value="101">Luxembourg</option>
                                                   <option value="207">Macau SAR</option>
                                                   <option value="102">Macedonia</option>
                                                   <option value="103">Madagascar</option>
                                                   <option value="104">Malawi</option>
                                                   <option value="105">Malaysia</option>
                                                   <option value="106">Maldives</option>
                                                   <option value="107">Mali</option>
                                                   <option value="108">Malta</option>
                                                   <option value="109" title="Marshall Islands">Marshall Islands</option>
                                                   <option value="192">Martinique</option>
                                                   <option value="110">Mauritania</option>
                                                   <option value="111">Mauritius</option>
                                                   <option value="112">Mexico</option>
                                                   <option value="113" title="Micronesia, Fed. States of">Micronesia, Fed. States of</option>
                                                   <option value="114">Moldova</option>
                                                   <option value="115">Monaco</option>
                                                   <option value="116">Mongolia</option>
                                                   <option value="201">Montenegro</option>
                                                   <option value="117">Morocco</option>
                                                   <option value="118">Mozambique</option>
                                                   <option value="119">Myanmar</option>
                                                   <option value="120">Namibia</option>
                                                   <option value="121">Nauru</option>
                                                   <option value="122">Nepal</option>
                                                   <option value="123">Netherlands</option>
                                                   <option value="206">New Caledonia</option>
                                                   <option value="124">New Zealand</option>
                                                   <option value="125">Nicaragua</option>
                                                   <option value="126">Niger</option>
                                                   <option value="127">Nigeria</option>
                                                   <option value="210" title="Northern Mariana Islands">Northern Mariana Islands</option>
                                                   <option value="128">Norway</option>
                                                   <option value="129">Oman</option>
                                                   <option value="130">Pakistan</option>
                                                   <option value="131">Palau</option>
                                                   <option value="202" title="Palestinian Territories">Palestinian Territories</option>
                                                   <option value="132">Panama</option>
                                                   <option value="133" title="Papua New Guinea">Papua New Guinea</option>
                                                   <option value="134">Paraguay</option>
                                                   <option value="135">Peru</option>
                                                   <option value="136">Philippines</option>
                                                   <option value="137">Poland</option>
                                                   <option value="138">Portugal</option>
                                                   <option value="198">Puerto Rico</option>
                                                   <option value="139">Qatar</option>
                                                   <option value="209">Réunion</option>
                                                   <option value="140">Romania</option>
                                                   <option value="141" title="Russian Federation">Russian Federation</option>
                                                   <option value="142">Rwanda</option>
                                                   <option value="143" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                   <option value="144">Saint Lucia</option>
                                                   <option value="146">Samoa</option>
                                                   <option value="147">San Marino</option>
                                                   <option value="148" title="Sao Tome and Princ.">Sao Tome and Princ.</option>
                                                   <option value="149">Saudi Arabia</option>
                                                   <option value="150">Senegal</option>
                                                   <option value="191">Serbia</option>
                                                   <option value="151">Seychelles</option>
                                                   <option value="152">Sierra Leone</option>
                                                   <option value="153">Singapore</option>
                                                   <option value="154">Slovakia</option>
                                                   <option value="155">Slovenia</option>
                                                   <option value="156">Solomon Islands</option>
                                                   <option value="157">Somalia</option>
                                                   <option value="158">South Africa</option>
                                                   <option value="159">Spain</option>
                                                   <option value="160">Sri Lanka</option>
                                                   <option value="145" title="St Vincent and Gren.">St Vincent and Gren.</option>
                                                   <option value="161">Sudan</option>
                                                   <option value="162">Suriname</option>
                                                   <option value="163">Swaziland</option>
                                                   <option value="164">Sweden</option>
                                                   <option value="165">Switzerland</option>
                                                   <option value="166">Syria</option>
                                                   <option value="167">Taiwan</option>
                                                   <option value="168">Tajikistan</option>
                                                   <option value="169">Tanzania</option>
                                                   <option value="170">Thailand</option>
                                                   <option value="171">Togo</option>
                                                   <option value="172">Tonga</option>
                                                   <option value="173" title="Trinidad and Tobago">Trinidad and Tobago</option>
                                                   <option value="174">Tunisia</option>
                                                   <option value="175">Turkey</option>
                                                   <option value="176">Turkmenistan</option>
                                                   <option value="177">Tuvalu</option>
                                                   <option value="178">Uganda</option>
                                                   <option value="179">Ukraine</option>
                                                   <option value="180" title="United Arab Emirates">United Arab Emirates</option>
                                                   <option value="181">United Kingdom</option>
                                                   <option value="182">United States</option>
                                                   <option value="183">Uruguay</option>
                                                   <option value="184">Uzbekistan</option>
                                                   <option value="185">Vanuatu</option>
                                                   <option value="186">Vatican City</option>
                                                   <option value="187">Venezuela</option>
                                                   <option value="188">Vietnam</option>
                                                   <option value="199" title="Virgin Islands, British">Virgin Islands, British</option>
                                                   <option value="200" title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                   <option value="189">Western Sahara</option>
                                                   <option value="190">Yemen</option>
                                                   <option value="193">Zambia</option>
                                                   <option value="194">Zimbabwe</option>
                                                </select>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class="jfn">(For example, if you want your project to be translated by a translator living only in the target language country; select one or several countries for an interpretation job.)</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <input type="checkbox" style="margin-right: 10px;">
                        <label for=""> Send notifications only to <a href="">Master Members</a></label><br>
                        <input type="checkbox" style="margin-right: 10px;">
                        <label for=""> Show job to Master Members immediately, to all users after a 12-hour delay.</label><br>
                        <p>Please note that the request to send notifications only to Master Members will always be considered, however, sometimes it cannot be guaranteed. For example, if the number of Master Members who qualify for this job offer is less than 10, it's in the interests of the outsourcer to send notifications to all members who qualify, not only to Master members.</p>
                        <input type="checkbox" style="margin-right: 10px;">
                        <label for=""> Not to be published in other forums or mailing lists.</label><br>
                        <p>Jobs posted on the TranslatorsCafe.com Job Board are considered to be sent to the public at large and links to them may be posted elsewhere unless the job poster selects this check box.</p>
                        <input type="checkbox" style="margin-right: 10px;">
                        <label for=""> Show this job only to TC registered users.</label><br>
                        <div class="d-flex" style="align-item: center;">
                           <input type="checkbox" style="margin-right: 10px;">
                           <label for=""> I certify that the information I have provided in this job offer form and during the process of registration is true and correct and does not contain any illegal content or links to illegal or objectionable Web sites (e.g. with adult content). I further certify that I am willing to provide my feedback to all language professionals who offered their services for this job and that I will not ask them to translate any illegal or objectionable content (e.g. adult).</label><br>
                        </div>
                        <div class="fv div notes">
                           <p class="jfn">The IP address of your computer 203.175.72.37 will be recorded.&nbsp;&nbsp;<a class="tcHelp" href="#_" data-help=";C;17"><sup title="Click or tap to get help" class="qmark">?</sup></a><br>Your country determined by your IP address:<img src="/cafe/images/flags/PK.gif" alt="PK" style="width:18px;height:12px;"> Pakistan</p>
                           <p>HTML is not allowed, except for &lt;b&gt;&lt;/b&gt;, &lt;i&gt;&lt;/i&gt; tags.</p>
                        </div>
                        <p style="margin: 10px 0px;">When you have completed filling out this form, please click or tap the Submit button. Please do not click or tap several times and be prepared to wait for a result. On the next page you will be provided with a job number. If you find any mistakes in your posting after its submission, you can always edit the job. Note that you must use your job number to do so. A confirmation message will be sent to your e-mail address hamza.alam@accrualgroup.com. If you cannot receive it, you may want to check your e-mail address. <a href="">More information.</a></p>
                     </div>
                     <button type="submit" class="commonBtn">Submit</button>
                  </form>
               </div>
               <div class="simpleForm">
               <div class="inputDiv editJob">
                     <label for="">Edit Job</label>
                     <input class="form-control" type="text" name="edit_job" id="edit_job" placeholder="Job Title" required="required" value="0">
                     <button>Load</button>
                  </div>
                  <form action="{{route('post-a-job')}}" method="post">
                     @csrf
                     <div class="inputDiv">
                        <label for="">Job Title <span class="required">*</span></label>
                        <input class="form-control" type="text" name="job_title" id="job_title" placeholder="Job Title" required="required">
                     </div>
                     <!-- <div class="inputDiv">
                        <label for="">Job Budget <span class="required">*</span></label>
                        <input min="0" oninput="this.value = !!this.value &amp;&amp; Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" class="form-control" type="number" name="job_budget" id="job_budget" placeholder="Budget" required="required">
                        </div> -->
                     <div class="inputDiv">
                        <label for="">Job Description <span class="required">*</span></label>
                        <textarea class="form-control" name="job_desc" id="job_desc" cols="30" rows="10" required></textarea>
                     </div>
                     <p class="hint">
                        Max. 2500 characters, incl. spaces.<br>(Short description of the project, required expertise, payment, and any other relevant information. Please provide as many details as possible regarding the specific subject matter of your project. Do not enter "technical", "medical", "legal", etc. — please be specific: e.g., "manual for a vacuum cleaner", "an article from Scientific American on new advances in cancer treatment", "a lease agreement from Spain", etc. Please also provide translators with an exact or approximate word count of your document.)
                     </p>
                     <div class="languageDiv">
                        <h5>Job Types</h5>
                        <div class="multiple-select">
                           <select name="job_type" class="form-control p-0" required>
                              <option value="">Select Service</option>
                              <option value="Closed captioning">Closed captioning</option>
                              <option value="Copywriting">Copywriting</option>
                              <option value="Desktop publishing">Desktop publishing</option>
                              <option value="Editing">Editing</option>
                              <option value="Interpreting">Interpreting</option>
                              <option value="Interpreting – conference">Interpreting – conference</option>
                              <option value="Interpreting – court/legal">Interpreting – court/legal</option>
                              <option value="Interpreting – medical">Interpreting – medical</option>
                              <option value="Interpreting – phone">Interpreting – phone</option>
                              <option value="Interpreting – sign language">Interpreting – sign language</option>
                              <option value="Localization">Localization</option>
                              <option value="Other">Other</option>
                              <option value="Project management">Project management</option>
                              <option value="Proofreading">Proofreading</option>
                              <option value="Research">Research</option>
                              <option value="Subtitling">Subtitling</option>
                              <option value="Teaching">Teaching</option>
                              <option value="Technical Review">Technical Review</option>
                              <option value="Technical writing">Technical writing</option>
                              <option value="Terminology research">Terminology research</option>
                              <option value="Transcription">Transcription</option>
                              <option value="Translation">Translation</option>
                              <option value="Typesetting">Typesetting</option>
                              <option value="Voice-over">Voice-over</option>
                           </select>
                        </div>
                        <div class="radioDiv">
                           <input type="radio" id="Intermediate" name="job_type_level" value="Intermediate" checked>
                           <label for="Intermediate">Intermediate</label>
                           <input type="radio" id="Potential" name="job_type_level" value="Potential">
                           <label for="Potential">Potential</label>
                           <input type="radio" id="In-House" name="job_type_level" value="In-House">
                           <label for="In-House">In-House</label>
                           <input type="radio" id="Tele-Community" name="job_type_level" value="Tele-Community">
                           <label for="Tele-Community">Tele-Community</label>
                        </div>
                        <p><b>Expalanation of Job Types</b></p>
                        <h5>Deadlines</h5>
                        <div class="radioDiv">
                           <input type="radio" id="No-dealine" name="expiry_status" value="0" checked>
                           <label for="No-dealine">No-dealine</label>
                           <input type="radio" id="Set-Date" name="expiry_status" value="1">
                           <label for="Set Date">Set Date</label>
                        </div>
                        <div class="setDateDiv">
                           <input class="form-control" type="date" name="expiry_date" />
                        </div>
                     </div>
                     <div class="languageDiv">
                        <h5>Languages</h5>
                        <p class="warning">At least one language pair is required.</p>
                        <p>Please include both language pairs if you need an interpreter. For example, if you need an English-French interpreter, select English>French
                           and French>English.
                        </p>
                        <div class="multiple-select pairlng">
                           <div class="row">
                              <div class="col-md-4">
                                 <select class="form-control" id="from_language" name="from_language[]" required>
                                    <option value="">Select Language</option>
                                    <option value="af">Afrikaans</option>
                                    <option value="sq">Albanian - shqip</option>
                                    <option value="am">Amharic - አማርኛ</option>
                                    <option value="ar">Arabic - العربية</option>
                                    <option value="an">Aragonese - aragonés</option>
                                    <option value="hy">Armenian - հայերեն</option>
                                    <option value="ast">Asturian - asturianu</option>
                                    <option value="az">Azerbaijani - azərbaycan dili</option>
                                    <option value="eu">Basque - euskara</option>
                                    <option value="be">Belarusian - беларуская</option>
                                    <option value="bn">Bengali - বাংলা</option>
                                    <option value="bs">Bosnian - bosanski</option>
                                    <option value="br">Breton - brezhoneg</option>
                                    <option value="bg">Bulgarian - български</option>
                                    <option value="ca">Catalan - català</option>
                                    <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                    <option value="zh">Chinese - 中文</option>
                                    <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                    <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                    <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                    <option value="co">Corsican</option>
                                    <option value="hr">Croatian - hrvatski</option>
                                    <option value="cs">Czech - čeština</option>
                                    <option value="da">Danish - dansk</option>
                                    <option value="nl">Dutch - Nederlands</option>
                                    <option value="en">English</option>
                                    <option value="en-AU">English (Australia)</option>
                                    <option value="en-CA">English (Canada)</option>
                                    <option value="en-IN">English (India)</option>
                                    <option value="en-NZ">English (New Zealand)</option>
                                    <option value="en-ZA">English (South Africa)</option>
                                    <option value="en-GB">English (United Kingdom)</option>
                                    <option value="en-US">English (United States)</option>
                                    <option value="eo">Esperanto - esperanto</option>
                                    <option value="et">Estonian - eesti</option>
                                    <option value="fo">Faroese - føroyskt</option>
                                    <option value="fil">Filipino</option>
                                    <option value="fi">Finnish - suomi</option>
                                    <option value="fr">French - français</option>
                                    <option value="fr-CA">French (Canada) - français (Canada)</option>
                                    <option value="fr-FR">French (France) - français (France)</option>
                                    <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                    <option value="gl">Galician - galego</option>
                                    <option value="ka">Georgian - ქართული</option>
                                    <option value="de">German - Deutsch</option>
                                    <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                    <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                    <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                    <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                    <option value="el">Greek - Ελληνικά</option>
                                    <option value="gn">Guarani</option>
                                    <option value="gu">Gujarati - ગુજરાતી</option>
                                    <option value="ha">Hausa</option>
                                    <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                    <option value="he">Hebrew - עברית</option>
                                    <option value="hi">Hindi - हिन्दी</option>
                                    <option value="hu">Hungarian - magyar</option>
                                    <option value="is">Icelandic - íslenska</option>
                                    <option value="id">Indonesian - Indonesia</option>
                                    <option value="ia">Interlingua</option>
                                    <option value="ga">Irish - Gaeilge</option>
                                    <option value="it">Italian - italiano</option>
                                    <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                    <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                    <option value="ja">Japanese - 日本語</option>
                                    <option value="kn">Kannada - ಕನ್ನಡ</option>
                                    <option value="kk">Kazakh - қазақ тілі</option>
                                    <option value="km">Khmer - ខ្មែរ</option>
                                    <option value="ko">Korean - 한국어</option>
                                    <option value="ku">Kurdish - Kurdî</option>
                                    <option value="ky">Kyrgyz - кыргызча</option>
                                    <option value="lo">Lao - ລາວ</option>
                                    <option value="la">Latin</option>
                                    <option value="lv">Latvian - latviešu</option>
                                    <option value="ln">Lingala - lingála</option>
                                    <option value="lt">Lithuanian - lietuvių</option>
                                    <option value="mk">Macedonian - македонски</option>
                                    <option value="ms">Malay - Bahasa Melayu</option>
                                    <option value="ml">Malayalam - മലയാളം</option>
                                    <option value="mt">Maltese - Malti</option>
                                    <option value="mr">Marathi - मराठी</option>
                                    <option value="mn">Mongolian - монгол</option>
                                    <option value="ne">Nepali - नेपाली</option>
                                    <option value="no">Norwegian - norsk</option>
                                    <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                    <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                    <option value="oc">Occitan</option>
                                    <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                    <option value="om">Oromo - Oromoo</option>
                                    <option value="ps">Pashto - پښتو</option>
                                    <option value="fa">Persian - فارسی</option>
                                    <option value="pl">Polish - polski</option>
                                    <option value="pt">Portuguese - português</option>
                                    <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                    <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                    <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                    <option value="qu">Quechua</option>
                                    <option value="ro">Romanian - română</option>
                                    <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                    <option value="rm">Romansh - rumantsch</option>
                                    <option value="ru">Russian - русский</option>
                                    <option value="gd">Scottish Gaelic</option>
                                    <option value="sr">Serbian - српски</option>
                                    <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                    <option value="sn">Shona - chiShona</option>
                                    <option value="sd">Sindhi</option>
                                    <option value="si">Sinhala - සිංහල</option>
                                    <option value="sk">Slovak - slovenčina</option>
                                    <option value="sl">Slovenian - slovenščina</option>
                                    <option value="so">Somali - Soomaali</option>
                                    <option value="st">Southern Sotho</option>
                                    <option value="es">Spanish - español</option>
                                    <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                    <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                    <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                    <option value="es-ES">Spanish (Spain) - español (España)</option>
                                    <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                    <option value="su">Sundanese</option>
                                    <option value="sw">Swahili - Kiswahili</option>
                                    <option value="sv">Swedish - svenska</option>
                                    <option value="tg">Tajik - тоҷикӣ</option>
                                    <option value="ta">Tamil - தமிழ்</option>
                                    <option value="tt">Tatar</option>
                                    <option value="te">Telugu - తెలుగు</option>
                                    <option value="th">Thai - ไทย</option>
                                    <option value="ti">Tigrinya - ትግርኛ</option>
                                    <option value="to">Tongan - lea fakatonga</option>
                                    <option value="tr">Turkish - Türkçe</option>
                                    <option value="tk">Turkmen</option>
                                    <option value="tw">Twi</option>
                                    <option value="uk">Ukrainian - українська</option>
                                    <option value="ur">Urdu - اردو</option>
                                    <option value="ug">Uyghur</option>
                                    <option value="uz">Uzbek - o‘zbek</option>
                                    <option value="vi">Vietnamese - Tiếng Việt</option>
                                    <option value="wa">Walloon - wa</option>
                                    <option value="cy">Welsh - Cymraeg</option>
                                    <option value="fy">Western Frisian</option>
                                    <option value="xh">Xhosa</option>
                                    <option value="yi">Yiddish</option>
                                    <option value="yo">Yoruba - Èdè Yorùbá</option>
                                    <option value="zu">Zulu - isiZulu</option>
                                 </select>
                              </div>
                              <div class="col-md-1">
                                 <span>>></span>
                              </div>
                              <div class="col-md-4">
                                 <select class="form-control" id="to_language" name="to_language[]" required>
                                    <option value="">Select Language</option>
                                    <option value="af">Afrikaans</option>
                                    <option value="sq">Albanian - shqip</option>
                                    <option value="am">Amharic - አማርኛ</option>
                                    <option value="ar">Arabic - العربية</option>
                                    <option value="an">Aragonese - aragonés</option>
                                    <option value="hy">Armenian - հայերեն</option>
                                    <option value="ast">Asturian - asturianu</option>
                                    <option value="az">Azerbaijani - azərbaycan dili</option>
                                    <option value="eu">Basque - euskara</option>
                                    <option value="be">Belarusian - беларуская</option>
                                    <option value="bn">Bengali - বাংলা</option>
                                    <option value="bs">Bosnian - bosanski</option>
                                    <option value="br">Breton - brezhoneg</option>
                                    <option value="bg">Bulgarian - български</option>
                                    <option value="ca">Catalan - català</option>
                                    <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                    <option value="zh">Chinese - 中文</option>
                                    <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                    <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                    <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                    <option value="co">Corsican</option>
                                    <option value="hr">Croatian - hrvatski</option>
                                    <option value="cs">Czech - čeština</option>
                                    <option value="da">Danish - dansk</option>
                                    <option value="nl">Dutch - Nederlands</option>
                                    <option value="en">English</option>
                                    <option value="en-AU">English (Australia)</option>
                                    <option value="en-CA">English (Canada)</option>
                                    <option value="en-IN">English (India)</option>
                                    <option value="en-NZ">English (New Zealand)</option>
                                    <option value="en-ZA">English (South Africa)</option>
                                    <option value="en-GB">English (United Kingdom)</option>
                                    <option value="en-US">English (United States)</option>
                                    <option value="eo">Esperanto - esperanto</option>
                                    <option value="et">Estonian - eesti</option>
                                    <option value="fo">Faroese - føroyskt</option>
                                    <option value="fil">Filipino</option>
                                    <option value="fi">Finnish - suomi</option>
                                    <option value="fr">French - français</option>
                                    <option value="fr-CA">French (Canada) - français (Canada)</option>
                                    <option value="fr-FR">French (France) - français (France)</option>
                                    <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                    <option value="gl">Galician - galego</option>
                                    <option value="ka">Georgian - ქართული</option>
                                    <option value="de">German - Deutsch</option>
                                    <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                    <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                    <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                    <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                    <option value="el">Greek - Ελληνικά</option>
                                    <option value="gn">Guarani</option>
                                    <option value="gu">Gujarati - ગુજરાતી</option>
                                    <option value="ha">Hausa</option>
                                    <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                    <option value="he">Hebrew - עברית</option>
                                    <option value="hi">Hindi - हिन्दी</option>
                                    <option value="hu">Hungarian - magyar</option>
                                    <option value="is">Icelandic - íslenska</option>
                                    <option value="id">Indonesian - Indonesia</option>
                                    <option value="ia">Interlingua</option>
                                    <option value="ga">Irish - Gaeilge</option>
                                    <option value="it">Italian - italiano</option>
                                    <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                    <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                    <option value="ja">Japanese - 日本語</option>
                                    <option value="kn">Kannada - ಕನ್ನಡ</option>
                                    <option value="kk">Kazakh - қазақ тілі</option>
                                    <option value="km">Khmer - ខ្មែរ</option>
                                    <option value="ko">Korean - 한국어</option>
                                    <option value="ku">Kurdish - Kurdî</option>
                                    <option value="ky">Kyrgyz - кыргызча</option>
                                    <option value="lo">Lao - ລາວ</option>
                                    <option value="la">Latin</option>
                                    <option value="lv">Latvian - latviešu</option>
                                    <option value="ln">Lingala - lingála</option>
                                    <option value="lt">Lithuanian - lietuvių</option>
                                    <option value="mk">Macedonian - македонски</option>
                                    <option value="ms">Malay - Bahasa Melayu</option>
                                    <option value="ml">Malayalam - മലയാളം</option>
                                    <option value="mt">Maltese - Malti</option>
                                    <option value="mr">Marathi - मराठी</option>
                                    <option value="mn">Mongolian - монгол</option>
                                    <option value="ne">Nepali - नेपाली</option>
                                    <option value="no">Norwegian - norsk</option>
                                    <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                    <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                    <option value="oc">Occitan</option>
                                    <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                    <option value="om">Oromo - Oromoo</option>
                                    <option value="ps">Pashto - پښتو</option>
                                    <option value="fa">Persian - فارسی</option>
                                    <option value="pl">Polish - polski</option>
                                    <option value="pt">Portuguese - português</option>
                                    <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                    <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                    <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                    <option value="qu">Quechua</option>
                                    <option value="ro">Romanian - română</option>
                                    <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                    <option value="rm">Romansh - rumantsch</option>
                                    <option value="ru">Russian - русский</option>
                                    <option value="gd">Scottish Gaelic</option>
                                    <option value="sr">Serbian - српски</option>
                                    <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                    <option value="sn">Shona - chiShona</option>
                                    <option value="sd">Sindhi</option>
                                    <option value="si">Sinhala - සිංහල</option>
                                    <option value="sk">Slovak - slovenčina</option>
                                    <option value="sl">Slovenian - slovenščina</option>
                                    <option value="so">Somali - Soomaali</option>
                                    <option value="st">Southern Sotho</option>
                                    <option value="es">Spanish - español</option>
                                    <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                    <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                    <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                    <option value="es-ES">Spanish (Spain) - español (España)</option>
                                    <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                    <option value="su">Sundanese</option>
                                    <option value="sw">Swahili - Kiswahili</option>
                                    <option value="sv">Swedish - svenska</option>
                                    <option value="tg">Tajik - тоҷикӣ</option>
                                    <option value="ta">Tamil - தமிழ்</option>
                                    <option value="tt">Tatar</option>
                                    <option value="te">Telugu - తెలుగు</option>
                                    <option value="th">Thai - ไทย</option>
                                    <option value="ti">Tigrinya - ትግርኛ</option>
                                    <option value="to">Tongan - lea fakatonga</option>
                                    <option value="tr">Turkish - Türkçe</option>
                                    <option value="tk">Turkmen</option>
                                    <option value="tw">Twi</option>
                                    <option value="uk">Ukrainian - українська</option>
                                    <option value="ur">Urdu - اردو</option>
                                    <option value="ug">Uyghur</option>
                                    <option value="uz">Uzbek - o‘zbek</option>
                                    <option value="vi">Vietnamese - Tiếng Việt</option>
                                    <option value="wa">Walloon - wa</option>
                                    <option value="cy">Welsh - Cymraeg</option>
                                    <option value="fy">Western Frisian</option>
                                    <option value="xh">Xhosa</option>
                                    <option value="yi">Yiddish</option>
                                    <option value="yo">Yoruba - Èdè Yorùbá</option>
                                    <option value="zu">Zulu - isiZulu</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <button type="button" class="commonBtn addpair">Add Language Pair</button>
                     </div>
                     <div style="padding: 15px 50px">
                       
                        <div class="d-flex" style="align-item: center;">
                           <input type="checkbox" style="margin-right: 10px;">
                           <label for=""> I certify that the information I have provided in this job offer form and during the process of registration is true and correct and does not contain any illegal content or links to illegal or objectionable Web sites (e.g. with adult content). I further certify that I am willing to provide my feedback to all language professionals who offered their services for this job and that I will not ask them to translate any illegal or objectionable content (e.g. adult).</label><br>
                        </div>
                        <div class="fv div notes">
                           <p class="jfn">The IP address of your computer 203.175.72.37 will be recorded.&nbsp;&nbsp;<a class="tcHelp" href="#_" data-help=";C;17"><sup title="Click or tap to get help" class="qmark">?</sup></a><br>Your country determined by your IP address:<img src="/cafe/images/flags/PK.gif" alt="PK" style="width:18px;height:12px;"> Pakistan</p>
                           <p>HTML is not allowed, except for &lt;b&gt;&lt;/b&gt;, &lt;i&gt;&lt;/i&gt; tags.</p>
                        </div>
                        <p style="margin: 10px 0px;">When you have completed filling out this form, please click or tap the Submit button. Please do not click or tap several times and be prepared to wait for a result. On the next page you will be provided with a job number. If you find any mistakes in your posting after its submission, you can always edit the job. Note that you must use your job number to do so. A confirmation message will be sent to your e-mail address hamza.alam@accrualgroup.com. If you cannot receive it, you may want to check your e-mail address. <a href="">More information.</a></p>
                     </div>
                     <button type="submit" class="commonBtn">Submit</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="rightDiv">
               <div class="lookingFor languageProfessional">
                  <p class="header">Clients Looking for a Language Professional:</p>
                  <ul>
                     <li><a href="{{ url('/post-a-job') }}">Post a Job</a></li>
                     <li><a href="{{url('/search-freelancer')}}">Find a Translator</a></li>
                     <li><a href="{{url('/search-agencies')}}">Find a Translation Agency</a></li>
                  </ul>
               </div>
               <div class="lookingFor">
                  <p class="header">Language Professionals:</p>
                  <ul>
                     <li><a href="">Translation Jobs</a></li>
                     <li><a href="">Terminology Help</a></li>
                     <li><a href="">Discussion Forums</a></li>
                     <li><a href="">Web Site Builder</a></li>
                     <li><a href="">Web Site Builder</a></li>
                     <li><a href="">Discussion Forums</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
<div id="pairlngdev" style="display: none;">
   <div class="row" style="margin-top:10px">
      <div class="col-md-4">
         <select class="form-control" id="from_language" name="from_language[]">
            <option value="">Select Language</option>
            <option value="af">Afrikaans</option>
            <option value="sq">Albanian - shqip</option>
            <option value="am">Amharic - አማርኛ</option>
            <option value="ar">Arabic - العربية</option>
            <option value="an">Aragonese - aragonés</option>
            <option value="hy">Armenian - հայերեն</option>
            <option value="ast">Asturian - asturianu</option>
            <option value="az">Azerbaijani - azərbaycan dili</option>
            <option value="eu">Basque - euskara</option>
            <option value="be">Belarusian - беларуская</option>
            <option value="bn">Bengali - বাংলা</option>
            <option value="bs">Bosnian - bosanski</option>
            <option value="br">Breton - brezhoneg</option>
            <option value="bg">Bulgarian - български</option>
            <option value="ca">Catalan - català</option>
            <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
            <option value="zh">Chinese - 中文</option>
            <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
            <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
            <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
            <option value="co">Corsican</option>
            <option value="hr">Croatian - hrvatski</option>
            <option value="cs">Czech - čeština</option>
            <option value="da">Danish - dansk</option>
            <option value="nl">Dutch - Nederlands</option>
            <option value="en">English</option>
            <option value="en-AU">English (Australia)</option>
            <option value="en-CA">English (Canada)</option>
            <option value="en-IN">English (India)</option>
            <option value="en-NZ">English (New Zealand)</option>
            <option value="en-ZA">English (South Africa)</option>
            <option value="en-GB">English (United Kingdom)</option>
            <option value="en-US">English (United States)</option>
            <option value="eo">Esperanto - esperanto</option>
            <option value="et">Estonian - eesti</option>
            <option value="fo">Faroese - føroyskt</option>
            <option value="fil">Filipino</option>
            <option value="fi">Finnish - suomi</option>
            <option value="fr">French - français</option>
            <option value="fr-CA">French (Canada) - français (Canada)</option>
            <option value="fr-FR">French (France) - français (France)</option>
            <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
            <option value="gl">Galician - galego</option>
            <option value="ka">Georgian - ქართული</option>
            <option value="de">German - Deutsch</option>
            <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
            <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
            <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
            <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
            <option value="el">Greek - Ελληνικά</option>
            <option value="gn">Guarani</option>
            <option value="gu">Gujarati - ગુજરાતી</option>
            <option value="ha">Hausa</option>
            <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
            <option value="he">Hebrew - עברית</option>
            <option value="hi">Hindi - हिन्दी</option>
            <option value="hu">Hungarian - magyar</option>
            <option value="is">Icelandic - íslenska</option>
            <option value="id">Indonesian - Indonesia</option>
            <option value="ia">Interlingua</option>
            <option value="ga">Irish - Gaeilge</option>
            <option value="it">Italian - italiano</option>
            <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
            <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
            <option value="ja">Japanese - 日本語</option>
            <option value="kn">Kannada - ಕನ್ನಡ</option>
            <option value="kk">Kazakh - қазақ тілі</option>
            <option value="km">Khmer - ខ្មែរ</option>
            <option value="ko">Korean - 한국어</option>
            <option value="ku">Kurdish - Kurdî</option>
            <option value="ky">Kyrgyz - кыргызча</option>
            <option value="lo">Lao - ລາວ</option>
            <option value="la">Latin</option>
            <option value="lv">Latvian - latviešu</option>
            <option value="ln">Lingala - lingála</option>
            <option value="lt">Lithuanian - lietuvių</option>
            <option value="mk">Macedonian - македонски</option>
            <option value="ms">Malay - Bahasa Melayu</option>
            <option value="ml">Malayalam - മലയാളം</option>
            <option value="mt">Maltese - Malti</option>
            <option value="mr">Marathi - मराठी</option>
            <option value="mn">Mongolian - монгол</option>
            <option value="ne">Nepali - नेपाली</option>
            <option value="no">Norwegian - norsk</option>
            <option value="nb">Norwegian Bokmål - norsk bokmål</option>
            <option value="nn">Norwegian Nynorsk - nynorsk</option>
            <option value="oc">Occitan</option>
            <option value="or">Oriya - ଓଡ଼ିଆ</option>
            <option value="om">Oromo - Oromoo</option>
            <option value="ps">Pashto - پښتو</option>
            <option value="fa">Persian - فارسی</option>
            <option value="pl">Polish - polski</option>
            <option value="pt">Portuguese - português</option>
            <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
            <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
            <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
            <option value="qu">Quechua</option>
            <option value="ro">Romanian - română</option>
            <option value="mo">Romanian (Moldova) - română (Moldova)</option>
            <option value="rm">Romansh - rumantsch</option>
            <option value="ru">Russian - русский</option>
            <option value="gd">Scottish Gaelic</option>
            <option value="sr">Serbian - српски</option>
            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
            <option value="sn">Shona - chiShona</option>
            <option value="sd">Sindhi</option>
            <option value="si">Sinhala - සිංහල</option>
            <option value="sk">Slovak - slovenčina</option>
            <option value="sl">Slovenian - slovenščina</option>
            <option value="so">Somali - Soomaali</option>
            <option value="st">Southern Sotho</option>
            <option value="es">Spanish - español</option>
            <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
            <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
            <option value="es-MX">Spanish (Mexico) - español (México)</option>
            <option value="es-ES">Spanish (Spain) - español (España)</option>
            <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
            <option value="su">Sundanese</option>
            <option value="sw">Swahili - Kiswahili</option>
            <option value="sv">Swedish - svenska</option>
            <option value="tg">Tajik - тоҷикӣ</option>
            <option value="ta">Tamil - தமிழ்</option>
            <option value="tt">Tatar</option>
            <option value="te">Telugu - తెలుగు</option>
            <option value="th">Thai - ไทย</option>
            <option value="ti">Tigrinya - ትግርኛ</option>
            <option value="to">Tongan - lea fakatonga</option>
            <option value="tr">Turkish - Türkçe</option>
            <option value="tk">Turkmen</option>
            <option value="tw">Twi</option>
            <option value="uk">Ukrainian - українська</option>
            <option value="ur">Urdu - اردو</option>
            <option value="ug">Uyghur</option>
            <option value="uz">Uzbek - o‘zbek</option>
            <option value="vi">Vietnamese - Tiếng Việt</option>
            <option value="wa">Walloon - wa</option>
            <option value="cy">Welsh - Cymraeg</option>
            <option value="fy">Western Frisian</option>
            <option value="xh">Xhosa</option>
            <option value="yi">Yiddish</option>
            <option value="yo">Yoruba - Èdè Yorùbá</option>
            <option value="zu">Zulu - isiZulu</option>
         </select>
      </div>
      <div class="col-md-1">
         <span>>></span>
      </div>
      <div class="col-md-4">
         <select class="form-control" id="to_language" name="to_language[]">
            <option value="">Select Language</option>
            <option value="af">Afrikaans</option>
            <option value="sq">Albanian - shqip</option>
            <option value="am">Amharic - አማርኛ</option>
            <option value="ar">Arabic - العربية</option>
            <option value="an">Aragonese - aragonés</option>
            <option value="hy">Armenian - հայերեն</option>
            <option value="ast">Asturian - asturianu</option>
            <option value="az">Azerbaijani - azərbaycan dili</option>
            <option value="eu">Basque - euskara</option>
            <option value="be">Belarusian - беларуская</option>
            <option value="bn">Bengali - বাংলা</option>
            <option value="bs">Bosnian - bosanski</option>
            <option value="br">Breton - brezhoneg</option>
            <option value="bg">Bulgarian - български</option>
            <option value="ca">Catalan - català</option>
            <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
            <option value="zh">Chinese - 中文</option>
            <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
            <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
            <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
            <option value="co">Corsican</option>
            <option value="hr">Croatian - hrvatski</option>
            <option value="cs">Czech - čeština</option>
            <option value="da">Danish - dansk</option>
            <option value="nl">Dutch - Nederlands</option>
            <option value="en">English</option>
            <option value="en-AU">English (Australia)</option>
            <option value="en-CA">English (Canada)</option>
            <option value="en-IN">English (India)</option>
            <option value="en-NZ">English (New Zealand)</option>
            <option value="en-ZA">English (South Africa)</option>
            <option value="en-GB">English (United Kingdom)</option>
            <option value="en-US">English (United States)</option>
            <option value="eo">Esperanto - esperanto</option>
            <option value="et">Estonian - eesti</option>
            <option value="fo">Faroese - føroyskt</option>
            <option value="fil">Filipino</option>
            <option value="fi">Finnish - suomi</option>
            <option value="fr">French - français</option>
            <option value="fr-CA">French (Canada) - français (Canada)</option>
            <option value="fr-FR">French (France) - français (France)</option>
            <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
            <option value="gl">Galician - galego</option>
            <option value="ka">Georgian - ქართული</option>
            <option value="de">German - Deutsch</option>
            <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
            <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
            <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
            <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
            <option value="el">Greek - Ελληνικά</option>
            <option value="gn">Guarani</option>
            <option value="gu">Gujarati - ગુજરાતી</option>
            <option value="ha">Hausa</option>
            <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
            <option value="he">Hebrew - עברית</option>
            <option value="hi">Hindi - हिन्दी</option>
            <option value="hu">Hungarian - magyar</option>
            <option value="is">Icelandic - íslenska</option>
            <option value="id">Indonesian - Indonesia</option>
            <option value="ia">Interlingua</option>
            <option value="ga">Irish - Gaeilge</option>
            <option value="it">Italian - italiano</option>
            <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
            <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
            <option value="ja">Japanese - 日本語</option>
            <option value="kn">Kannada - ಕನ್ನಡ</option>
            <option value="kk">Kazakh - қазақ тілі</option>
            <option value="km">Khmer - ខ្មែរ</option>
            <option value="ko">Korean - 한국어</option>
            <option value="ku">Kurdish - Kurdî</option>
            <option value="ky">Kyrgyz - кыргызча</option>
            <option value="lo">Lao - ລາວ</option>
            <option value="la">Latin</option>
            <option value="lv">Latvian - latviešu</option>
            <option value="ln">Lingala - lingála</option>
            <option value="lt">Lithuanian - lietuvių</option>
            <option value="mk">Macedonian - македонски</option>
            <option value="ms">Malay - Bahasa Melayu</option>
            <option value="ml">Malayalam - മലയാളം</option>
            <option value="mt">Maltese - Malti</option>
            <option value="mr">Marathi - मराठी</option>
            <option value="mn">Mongolian - монгол</option>
            <option value="ne">Nepali - नेपाली</option>
            <option value="no">Norwegian - norsk</option>
            <option value="nb">Norwegian Bokmål - norsk bokmål</option>
            <option value="nn">Norwegian Nynorsk - nynorsk</option>
            <option value="oc">Occitan</option>
            <option value="or">Oriya - ଓଡ଼ିଆ</option>
            <option value="om">Oromo - Oromoo</option>
            <option value="ps">Pashto - پښتو</option>
            <option value="fa">Persian - فارسی</option>
            <option value="pl">Polish - polski</option>
            <option value="pt">Portuguese - português</option>
            <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
            <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
            <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
            <option value="qu">Quechua</option>
            <option value="ro">Romanian - română</option>
            <option value="mo">Romanian (Moldova) - română (Moldova)</option>
            <option value="rm">Romansh - rumantsch</option>
            <option value="ru">Russian - русский</option>
            <option value="gd">Scottish Gaelic</option>
            <option value="sr">Serbian - српски</option>
            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
            <option value="sn">Shona - chiShona</option>
            <option value="sd">Sindhi</option>
            <option value="si">Sinhala - සිංහල</option>
            <option value="sk">Slovak - slovenčina</option>
            <option value="sl">Slovenian - slovenščina</option>
            <option value="so">Somali - Soomaali</option>
            <option value="st">Southern Sotho</option>
            <option value="es">Spanish - español</option>
            <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
            <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
            <option value="es-MX">Spanish (Mexico) - español (México)</option>
            <option value="es-ES">Spanish (Spain) - español (España)</option>
            <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
            <option value="su">Sundanese</option>
            <option value="sw">Swahili - Kiswahili</option>
            <option value="sv">Swedish - svenska</option>
            <option value="tg">Tajik - тоҷикӣ</option>
            <option value="ta">Tamil - தமிழ்</option>
            <option value="tt">Tatar</option>
            <option value="te">Telugu - తెలుగు</option>
            <option value="th">Thai - ไทย</option>
            <option value="ti">Tigrinya - ትግርኛ</option>
            <option value="to">Tongan - lea fakatonga</option>
            <option value="tr">Turkish - Türkçe</option>
            <option value="tk">Turkmen</option>
            <option value="tw">Twi</option>
            <option value="uk">Ukrainian - українська</option>
            <option value="ur">Urdu - اردو</option>
            <option value="ug">Uyghur</option>
            <option value="uz">Uzbek - o‘zbek</option>
            <option value="vi">Vietnamese - Tiếng Việt</option>
            <option value="wa">Walloon - wa</option>
            <option value="cy">Welsh - Cymraeg</option>
            <option value="fy">Western Frisian</option>
            <option value="xh">Xhosa</option>
            <option value="yi">Yiddish</option>
            <option value="yo">Yoruba - Èdè Yorùbá</option>
            <option value="zu">Zulu - isiZulu</option>
         </select>
      </div>
      <div class="col-md-1">
         <span class="fa fa-minus removepairlng" style="cursor:pointer"></sapn>
      </div>
   </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
   var i=1;
   $(".addpair").click(function() {
       if(i<=7)
       {
        $(".pairlng").append($("#pairlngdev").html());
        i++
       }
   })
   
   $(document).on("click", ".removepairlng", function() {
       $(this).parent().parent().remove();
       i--;
   })
   $(document).ready(function() {
       $('input:radio').change(function() {
           var val=$(this).val();
           if(val=="Full form"){
               $(".fullForm").css("display","block");
               $(".simpleForm").css("display","none");
           } else{
               $(".fullForm").css("display","none");
               $(".simpleForm").css("display","block")
           }
       });
       $(".requiredSoftware .lableDiv").click(function(){
           if($(".requiredSoftware .viewDiv").css("display")=="block"){
            $(".requiredSoftware .viewDiv").css("display","none");
           } else{
            $(".requiredSoftware .viewDiv").css("display","block")
           }
      
       })
       $(".offeredRate .lableDiv").click(function(){
           if($(".offeredRate .viewDiv").css("display")=="block"){
            $(".offeredRate .viewDiv").css("display","none");
           } else{
            $(".offeredRate .viewDiv").css("display","block")
           }
      
       })
       $(".jobLocation .lableDiv").click(function(){
           if($(".jobLocation .viewDiv").css("display")=="block"){
            $(".jobLocation .viewDiv").css("display","none");
           } else{
            $(".jobLocation .viewDiv").css("display","block")
           }
      
       })
   });
</script>
@endsection