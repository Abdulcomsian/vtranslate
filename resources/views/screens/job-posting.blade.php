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
                  <form method="post" action="{{route('edit-job')}}">
                     @csrf
                     <div class="inputDiv editJob">
                        <label for="">Edit Job</label>
                        <select class="form-control" name="edit_job" id="edit_job" required>
                           <option>Select Job</option>
                           @foreach( $jobs as $job)
                           <option value="{{$job->id}}">{{$job->job_title}}</option>
                           @endforeach
                        </select>
                        <!-- <input class="form-control" type="text" name="edit_job" id="edit_job" placeholder="Job Title" required="required" value="0"> -->
                        <button type="submit" id="loadjob">Load</button>
                     </div>
                  </form>
                  <form action="{{route('post-a-job')}}" method="post">
                     @csrf
                     <input type="hidden" name="job_form" id="job_form" value="" />
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
                     <div class="simpleForm">
                        <!-- <div class="subjectMatter">
                           <div class="scroll" id="fldJobSpecCnt">
                              @include("screens.includes.jobspecializtioncheckbox")
                           </div>
                        </div> -->
                        <div style="padding: 15px 50px">
                           <div class="requiredSpecial">
                              <div class="d-flex lableDiv">
                                 <img src="{{asset( 'assets/img/panelOpen.gif' )}}" alt="">
                                 <p style="margin: 0px;">Required Specialization</p>
                              </div>
                              <div class="viewDiv">
                                 @include("screens.includes.jobspecializtioncheckbox")
                              </div>
                           </div>
                        </div>
                        <div style="padding: 15px 50px">
                           <p>Select one or several Specialization, but less than 20.</p>
                           <div class="requiredSoftware">
                              <div class="d-flex lableDiv">
                                 <img src="{{asset( 'assets/img/panelOpen.gif' )}}" alt="">
                                 <p style="margin: 0px;">Required software</p>
                              </div>
                              <div class="viewDiv">
                                 @include('screens.includes.jobsoftwarecheckbox')
                              </div>
                           </div>
                           <!-- <div class="offeredRate">
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
                        </div> -->
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
                                                      <option value="">Select Coutnry</option>
                                                      @foreach($countries as $country)
                                                      <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                      @endforeach
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
                                                   <select id="MustLiveIn1" name="linguists_live[]" class="country">
                                                      <option value="">Select Coutnry</option>
                                                      @foreach($countries as $country)
                                                      <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                      @endforeach
                                                   </select>
                                                   &nbsp;or
                                                </td>
                                                <td>
                                                   <select id="MustLiveIn2" name="linguists_live[]" class="country">
                                                      <option value="">Select Coutnry</option>
                                                      @foreach($countries as $country)
                                                      <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                      @endforeach
                                                   </select>
                                                   &nbsp;or
                                                </td>
                                                <td>
                                                   <select id="MustLiveIn3" name="linguists_live[]" class="country">
                                                      <option value="">Select Coutnry</option>
                                                      @foreach($countries as $country)
                                                      <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                      @endforeach
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
                           <!-- <input type="checkbox" name="job_notify_master_member" style="margin-right: 10px;">
                           <label for=""> Send notifications only to <a href="">Master Members</a></label><br> -->
                           <input type="checkbox" name="job_show_master_member" style="margin-right: 10px;">
                           <label for=""> Show job to Master Members immediately, to all users after a 12-hour delay.</label><br>
                           <p>Please note that the request to send notifications only to Master Members will always be considered, however, sometimes it cannot be guaranteed. For example, if the number of Master Members who qualify for this job offer is less than 10, it's in the interests of the outsourcer to send notifications to all members who qualify, not only to Master members.</p>
                           <!-- <input type="checkbox" name="publish" style="margin-right: 10px;">
                           <label for=""> Not to be published in other forums or mailing lists.</label><br>
                           <p>Jobs posted on the TranslatorsCafe.com Job Board are considered to be sent to the public at large and links to them may be posted elsewhere unless the job poster selects this check box.</p> -->
                           <input type="checkbox" name="job_show_tc_user" style="margin-right: 10px;">
                           <label for=""> Show this job only to TC registered users.</label><br>
                        </div>
                     </div>
                     <div style="margin:10px 50px">
                        <div class="d-flex" style="align-item: center;">
                           <input type="checkbox" name="cerfity" style="margin-right: 10px;" required>
                           <label for=""> I certify that the information I have provided in this job offer form and during the process of registration is true and correct and does not contain any illegal content or links to illegal or objectionable Web sites (e.g. with adult content). I further certify that I am willing to provide my feedback to all language professionals who offered their services for this job and that I will not ask them to translate any illegal or objectionable content (e.g. adult).</label><br>
                        </div>
                        <div class="fv div notes">
                           <p class="jfn">The IP address of your computer 203.175.72.37 will be recorded.&nbsp;&nbsp;<a class="tcHelp" href="#_" data-help=";C;17"><sup title="Click or tap to get help" class="qmark">?</sup></a><br>Your country determined by your IP address:<img src="/cafe/images/flags/PK.gif" alt="PK" style="width:18px;height:12px;"> Pakistan</p>
                           <p>HTML is not allowed, except for &lt;b&gt;&lt;/b&gt;, &lt;i&gt;&lt;/i&gt; tags.</p>
                        </div>
                        <p style="margin: 10px 0px;">When you have completed filling out this form, please click or tap the Submit button. Please do not click or tap several times and be prepared to wait for a result. On the next page you will be provided with a job number. If you find any mistakes in your posting after its submission, you can always edit the job. Note that you must use your job number to do so. A confirmation message will be sent to your e-mail address hamza.alam@accrualgroup.com. If you cannot receive it, you may want to check your e-mail address.</p>
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
   var i = 1;
   $(".addpair").click(function() {
      if (i <= 7) {
         $(".pairlng").append($("#pairlngdev").html());
         i++
      }
   })

   $(document).on("click", ".removepairlng", function() {
      $(this).parent().parent().remove();
      i--;
   })
   $(document).ready(function() {
      $('input[name="fav_language"]').change(function() {
         var val = $(this).val();
         if (val == "Full form") {
            $("#job_form").val("Full form");
            $(".simpleForm").css("display", "block");
         } else {
            $("#job_form").val("Simple form")
            $(".simpleForm").css("display", "none")
         }
      });
      $(".requiredSpecial .lableDiv").click(function() {
         if ($(".requiredSpecial .viewDiv").css("display") == "block") {
            $(".requiredSpecial .viewDiv").css("display", "none");
         } else {
            $(".requiredSpecial .viewDiv").css("display", "block")
         }

      })
      $(".requiredSoftware .lableDiv").click(function() {
         if ($(".requiredSoftware .viewDiv").css("display") == "block") {
            $(".requiredSoftware .viewDiv").css("display", "none");
         } else {
            $(".requiredSoftware .viewDiv").css("display", "block")
         }

      })
      $(".offeredRate .lableDiv").click(function() {
         if ($(".offeredRate .viewDiv").css("display") == "block") {
            $(".offeredRate .viewDiv").css("display", "none");
         } else {
            $(".offeredRate .viewDiv").css("display", "block")
         }

      })
      $(".jobLocation .lableDiv").click(function() {
         if ($(".jobLocation .viewDiv").css("display") == "block") {
            $(".jobLocation .viewDiv").css("display", "none");
         } else {
            $(".jobLocation .viewDiv").css("display", "block")
         }

      })
   });
</script>
@endsection