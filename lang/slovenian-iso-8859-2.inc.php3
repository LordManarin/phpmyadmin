<?php

/* $Id$ */

/* By: uros kositer <urosh@agenda.si> */

$charset = 'iso-8859-2';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Tor', 'Sre', '�et', 'Pet', 'Sob');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Avg', 'Sep', 'Okt', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y ob %I:%M %p';


$strAccessDenied = 'Dostop zavrnjen';
$strAction = 'Akcija';
$strAddDeleteColumn = 'Dodaj/Odstrani stolpec \'Polje\'';
$strAddDeleteRow = 'Dodaj/Odstrani vrstico \'Kriterij\'';
$strAddNewField = 'Dodaj novo polje';
$strAddPriv = 'Dodaj nov privilegij';
$strAddPrivMessage = 'Dodali ste nov privilegij.';
$strAddSearchConditions = 'Dodaj iskalne pogoje (telo "where" stavka):';
$strAddToIndex = 'Dodaj indeksu &nbsp;%s&nbsp;stolpec(ce)';
$strAddUser = 'Dodaj novega uporabnika';
$strAddUserMessage = 'Dodali ste novega uporabnika.';
$strAffectedRows = 'Spremenjene vrstice:';
$strAfterInsertBack = 'Nazaj na prej�njo stran';
$strAfterInsertNewInsert = 'Vstavi �e eno novo vrstico';
$strAfter = 'Po %s';
$strAllTableSameWidth = 'prika�em vse tabele enake �irine?';
$strAll = 'Vse/Vsi';
$strAlterOrderBy = 'Spremeni vrstni red prikaza tabele za';
$strAnalyzeTable = 'Analiziraj tabelo';
$strAnd = 'In';
$strAnIndex = 'Na %s je dodan indeks';
$strAnyColumn = 'Katerikoli stolpec';
$strAnyDatabase = 'Katerakoli podatkovna baza';
$strAnyHost = 'Katerikoli gostitelj';
$strAny = 'Katerikoli';
$strAnyTable = 'Katerakoli tabela';
$strAnyUser = 'Katerikoli uporabnik';
$strAPrimaryKey = 'Na %s je dodan primarni klju�';
$strAscending = 'Nara��ajo�e';
$strAtBeginningOfTable = 'Na za�etku tabele';
$strAtEndOfTable = 'Na koncu tabele';
$strAttr = 'Atributi';

$strBack = 'Nazaj';
$strBinary = 'Binarno';
$strBinaryDoNotEdit = 'Binarno - ne urejaj';
$strBookmarkDeleted = 'Zaznamek je odstranjen.';
$strBookmarkLabel = 'Nalepka';
$strBookmarkQuery = 'Ozna�ena SQL-poizvedba';
$strBookmarkThis = 'Ozna�i to SQL-poizvedbo';
$strBookmarkView = 'Samo pogled';
$strBrowse = 'Prebrskaj';
$strBzip = '"bzipano"';

$strCantLoadMySQL = 'ni mogo�e nalo�iti MySQL ekstenzij,<br /> prosimo, preverite PHP konfiguracijo.';
$strCantLoadRecodeIconv = 'Ni mogo�e nalo�iti iconv ali recode ekstenzij, ki so potrebne za pretvorbe kodnih tabel, konfigurirajte php tako, da bo omogo�al uporabo teh ekstenzij ali onemogo�ite pretvarjanje kodnih tabel v phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Indeksa ni mogo�e preimenovati v PRIMARY!';
$strCantUseRecodeIconv = 'Ni mogo�e uporabljati iconv, libiconv ali recode_string funkcij, �eprav so ekstenzije normalno nalo�ene. Preverite konfiguracijo php.';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Znak za pomik na za�etek vrste (Carriage return): \\r';
$strChangeDisplay = 'Izberite polje za prikaz';
$strChangePassword = 'Spremeni geslo';
$strChange = 'Spremeni';
$strCheckAll = 'Ozna�i vse';
$strCheckDbPriv = 'Preveri privilegije podatkovne baze';
$strCheckTable = 'Preveri tabelo';
$strChoosePage = 'Izberite stran za urejanje';
$strColComFeat = 'Prikazovanje komentarjev stolpcev';
$strColumnNames = 'Imena stolpcev';
$strColumn = 'Stolpec';
$strComments = 'Komentarji';
$strCompleteInserts = 'Popolne \'insert\' poizvedbe';
$strConfigFileError = 'phpMyAdmin ni mogel prebrati konfiguracijske datoteke!<br />To se lahko zgodi, �e php pri prevajanju konfiguracijske datoteke najde napako ali pa ne najde datoteke.<br />Prosimo, odprite konfiguracijsko datoteko s povezavo, ki je navedena spodaj in preberite dobljeno sporo�ilo o napaki. V ve�ini primerov gre za manjkajo�i narekovaj ali podpi�je.<br />�e dobite prazno stran, je vse v redu.';
$strConfigureTableCoord = 'Prosimo, konfigurirajte koordinate za tabelo %s';
$strConfirm = 'Ali res �elite to storiti?';
$strCookiesRequired = '�e �elite �e dalje uporabljati program, morate omogo�iti pi�kotke.';
$strCopyTable = 'Kopiraj tabelo v (podatkovna_baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je skopirana v %s.';
$strCreateIndexTopic = 'Ustvari nov indeks';
$strCreateIndex = 'Ustvari indeks na&nbsp;%s&nbsp;stolpcih';
$strCreateNewDatabase = 'Ustvari novo podatkovno bazo';
$strCreateNewTable = 'Ustvari novo tabelo v podatkovni bazi %s';
$strCreatePage = 'Ustvari novo stran';
$strCreatePdfFeat = 'Ustvarjanje PDF datotek';
$strCreate = 'Ustvari';
$strCriteria = 'Kriteriji';

$strDatabaseHasBeenDropped = 'Podatkovna baza %s je zavr�ena.';
$strDatabase = 'Podatkovna baza ';
$strDatabases = 'podatkovne baze';
$strDatabasesStats = 'Statistika podatkovnih baz';
$strDatabaseWildcard = 'Podatkovna baza (nadomestni znaki dovoljeni):';
$strDataOnly = 'Samo podatki';
$strData = 'Podatki';
$strDefault = 'Privzeto';
$strDeletedRows = 'Izbrisane vrstice:';
$strDeleted = 'Vrstica je izbrisana';
$strDeleteFailed = 'Brisanje ni uspelo!';
$strDelete = 'Izbri�i';
$strDeleteUserMessage = 'Izbrisali ste uporabnika %s.';
$strDescending = 'Padajo�e';
$strDisabled = 'Onemogo�eno';
$strDisplayFeat = 'Prika�i lastnosti';
$strDisplayOrder = 'Vrstni red prikaza:';
$strDisplayPDF = 'Prika�i PDF shemo';
$strDisplay = 'Prika�i';
$strDoAQuery = 'Izvedi "query by example" (nadomestni znak: "%")';
$strDocu = 'Dokumentacija';
$strDoYouReally = 'Ali res �elite ';
$strDropDB = 'Zavr�i podatkovno bazo %s';
$strDropTable = 'Zavr�i tabelo';
$strDrop = 'Zavr�i';
$strDumpingData = 'Odlo�i podatke za tabelo';
$strDumpXRows = 'Odlo�i %s vrstic, za�ni z zapisom # %s.';
$strDynamic = 'dinami�no';

$strEditPDFPages = 'Uredi PDF strani';
$strEditPrivileges = 'Uredi privilegije';
$strEdit = 'Uredi';
$strEffective = 'U�inkovito';
$strEmpty = 'Izprazni';
$strEmptyResultSet = 'MySQL je vrnil kot rezultat prazno mno�ico (npr. ni� vrstic).';
$strEnabled = 'Omogo�eno';
$strEnd = 'Konec';
$strEnglishPrivileges = ' Opomba: Imena MySQL privilegijev so zapisana v angle��ini ';
$strError = 'Napaka';
$strExplain = 'Razlo�i SQL stavek';
$strExport = 'Izvozi';
$strExportToXML = 'Izvozi v XML obliko';
$strExtendedInserts = 'Raz�irjene \'insert\' poizvedbe';
$strExtra = 'Dodatno';

$strFieldHasBeenDropped = 'Polje %s je zavr�eno';
$strField = 'Polje';
$strFieldsEmpty = ' �tevec polj je prazen! ';
$strFieldsEnclosedBy = 'Polja obdana z';
$strFieldsEscapedBy = 'Polja izognjena z';
$strFields = 'Polja';
$strFieldsTerminatedBy = 'Polja zaklju�ena z';
$strFixed = 'fiksno';
$strFlushTable = 'Po�isti tabelo ("FLUSH")';
$strFormat = 'Oblika';
$strFormEmpty = 'V obliki manjka vrednost !';
$strFullText = 'Polna besedila';
$strFunction = 'Funkcija';

$strGenBy = 'Ustvaril';
$strGeneralRelationFeat = 'Splo�ne lastnosti relacij';
$strGenTime = '�as nastanka';
$strGo = 'Izvedi';
$strGrants = 'Dovoljenja';
$strGzip = '"gzipano"';

$strHasBeenAltered = 'je bil spremenjen(a).';
$strHasBeenCreated = 'je bil ustvarjen(a).';
$strHaveToShow = 'Za prikaz morate izbrati morate vsaj en stolpec';
$strHome = 'Domov';
$strHomepageOfficial = 'Uradna doma�a stran phpMyAdmin';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strHostEmpty = 'Ime gostitelja je prazno!';
$strHost = 'Gostitelj';

$strIdxFulltext = 'Polno besedilo';
$strIfYouWish = '�e bi radi nalo�ili samo nekatere stolpce tabele, jih navedite v seznamu, kjer jih lo�ite z vejico.';
$strIgnore = 'Prezri';
$strIndexes = 'Indeksi';
$strIndexHasBeenDropped = 'Indeks %s je zavr�en';
$strIndex = 'Indeks';
$strIndexName = 'Ime indeksa&nbsp;:';
$strIndexType = 'Vrsta indeksa&nbsp;:';
$strInsertAsNewRow = 'Vstavi kot novo vrstico';
$strInsertedRows = 'Vstavljene vrstice:';
$strInsertNewRow = 'Vstavi novo vrstico';
$strInsertTextfiles = 'V tabelo vstavi podatke iz datoteke z besedilom';
$strInsert = 'Vstavi';
$strInstructions = 'Navodila';
$strInUse = 'v uporabi';
$strInvalidName = 'beseda "%s" je rezervirana, zato je ne morete uporabiti kot ime podatkovne baze/tabele/polja.';

$strKeepPass = 'Ne spreminjaj gesla';
$strKeyname = 'Ime klju�a';
$strKill = 'Ubij proces';

$strLanguage = 'Jezik';
$strLength = 'Dol�ina';
$strLengthSet = 'Dol�ina/Vrednosti*';
$strLimitNumRows = '�tevilo vrstic na stran';
$strLineFeed = 'Pomik v novo vrsto (Linefeed): \\n';
$strLinesTerminatedBy = 'Vrstice zaklju�ene z';
$strLines = 'Vrstice';
$strLinkNotFound = 'Povezave ni mogo�e najti';
$strLinksTo = 'Povezave z';
$strLocationTextfile = 'Lokacija datoteke z besedilom';
$strLogin = 'Prijava';
$strLogout = 'Odjava';
$strLogPassword = 'Geslo:';
$strLogUsername = 'Uporabni�ko ime:';

$strMissingBracket = 'Manjkajo� oklepaj';
$strModifications = 'Spremembe so shranjene';
$strModifyIndexTopic = 'Spremeni indeks';
$strModify = 'Spremeni';
$strMoveTableOK = 'Tabela %s je bila premaknjena v %s.';
$strMoveTable = 'Premakni tabelo v (podatkovna_baza<b>.</b>tabela):';
$strMySQLCharset = 'MySQL kodna tabela';
$strMySQLReloaded = 'MySQL ponovno nalo�en.';
$strMySQLSaid = 'MySQL je vrnil: ';
$strMySQLServerProcess = 'MySQL %pma_s1% te�e na %pma_s2% kot %pma_s3%';
$strMySQLShowProcess = 'Poka�i procese';
$strMySQLShowStatus = 'Poka�i teko�e informacije o MySQL';
$strMySQLShowVars = 'Poka�i sistemske spremenljivke MySQL';

$strName = 'Ime';
$strNext = 'Naslednji';
$strNoDatabases = 'Brez podatkovnih baz';
$strNoDescription = 'brez opisa';
$strNoDropDatabases = '"DROP DATABASE" poizvedbe so izklju�ene.';
$strNoExplain = 'Presko�i razlago SQL stavka';
$strNoFrames = 'phpMyAdmin je prijaznej�i z brskalnikom, ki podpira okvirje.';
$strNoIndex = 'Ni definiranega indeksa!';
$strNoIndexPartsDefined = 'Ni definiranega dela indeksa!';
$strNoModification = 'Brez sprememb';
$strNo = 'Ne';
$strNone = 'Brez';
$strNoPassword = 'Brez gesla';
$strNoPhp = 'Brez kode PHP';
$strNoPrivileges = 'Brez privilegijev';
$strNoQuery = 'Brez SQL poizvedbe!';
$strNoRights = 'Nimate dovolj pravic, da bi bili sedaj tukaj!';
$strNoTablesFound = 'V podatkovni bazi ni mogo�e najti tabel.';
$strNotNumber = 'To ni �tevilo!';
$strNotOK = 'Ni v redu';
$strNotSet = 'Tabele <b>%s</b> ni mogo�e najti ali pa ni v %s';
$strNotValidNumber = ' ni veljavna �tevilka vrstice!';
$strNoUsersFound = 'Ni mogo�e najti uporabnika(ov).';
$strNoValidateSQL = 'Presko�i preverjanje pravilnosti SQL stavka';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s zadetek(ov) v tabeli <i>%s</i>';
$strNumSearchResultsTotal = '<b>Skupaj:</b> <i>%s</i> zadetek(ov)';

$strOftenQuotation = 'Pogosti narekovaji. OPCIJSKO pomeni, da so samo polja tipa \'char\' in \'varchar\' obdana s temi znaki.';
$strOK = 'V redu';
$strOperations = 'Operacije';
$strOptimizeTable = 'Optimiraj tabelo';
$strOptionalControls = 'Opcijsko. Narekuje na�in pisanja in branja posebnih znakov.';
$strOptionally = 'OPCIJSKO';
$strOptions = 'Mo�nosti';
$strOr = 'Ali';
$strOverhead = 'Prese�ek';

$strPageNumber = '�tevilka strani:';
$strPartialText = 'Delna besedila';
$strPasswordEmpty = 'Geslo je prazno!';
$strPassword = 'Geslo';
$strPasswordNotSame = 'Gesli se ne ujemata!';
$strPdfDbSchema = 'Shema podatkovne baze "%s" - Stran %s';
$strPdfInvalidPageNum = 'Nedefinirna �tevilka PDF strani!';
$strPdfInvalidTblName = 'Tabela "%s" ne obstaja!';
$strPdfNoTables = 'Ni tabel';
$strPhp = 'Ustvari PHP kodo';
$strPHPVersion = 'Razli�ica PHP';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = 'Ukaz <tt>$cfg[\'PmaAbsoluteUri\']</tt> mora biti definiran v konfiguracijski datoteki!';
$strPos1 = 'Za�etek';
$strPrevious = 'Prej�nji';
$strPrimaryKeyHasBeenDropped = 'Primarni klju� je zavr�en';
$strPrimaryKeyName = 'Ime primarnega klju�a mora biti... PRIMARY!';
$strPrimaryKey = 'Primarni klju�';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnega klju�a!)';
$strPrimary = 'Primarni';
$strPrintView = 'Pogled postavitve tiskanja';
$strPrivileges = 'Privilegiji';
$strProperties = 'Lastnosti';

$strQBEDel = 'Bri�i';
$strQBEIns = 'Vstavi';
$strQBE = 'Poizvedba';
$strQueryOnDb = 'SQL-poizvedba na podatkovni bazi <b>%s</b>:';

$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Preveri referen�no integriteto:';
$strRelationNotWorking = 'Dodatne funkcije za delo s povezanimi tabelami so bile izkju�ene. �e �elite izvedeti zakaj, kliknite %stukaj%s.';
$strRelationView = 'Pogled relacij';
$strReloadFailed = 'Ponovno nalaganje MySQL ni uspelo.';
$strReloadMySQL = 'Ponovno nalo�i MySQL';
$strRememberReload = 'Ne pozabite ponovno nalo�iti stre�nika.';
$strRenameTableOK = 'Tabela %s je preimenovana v %s';
$strRenameTable = 'Preimenuj tabelo v';
$strRepairTable = 'Popravi tabelo';
$strReplaceTable = 'Podatke v tabeli zamenjaj z datoteko';
$strReplace = 'Zamenjaj';
$strReset = 'Ponastavi';
$strReType = 'Ponovno vnesi';
$strRevokeGrantMessage = 'Odvzeli ste dovoljenje (Grant) za %s';
$strRevokeGrant = 'Odvzemi dovoljenje';
$strRevokeMessage = 'Odvzeli ste privilegije za %s';
$strRevoke = 'Odvzemi';
$strRevokePriv = 'Odvzemi privilegije';
$strRowLength = 'Dol�ina vrstice';
$strRowsFrom = 'vrstice naprej od zapisa #';
$strRowSize = ' Velikost vrstice ';
$strRowsModeHorizontal = 'vodoravnem';
$strRowsModeOptions = 'v %s na�inu in ponovi glavo po %s celicah';
$strRowsModeVertical = 'navpi�nem';
$strRowsStatistic = 'Statistika vrstic';
$strRows = 'Vrstice';
$strRunning = 'te�e na %s';
$strRunQuery = 'Izvedi poizvedbo';
$strRunSQLQuery = 'Izvedi SQL poizvedbo/poizvedbe na podatkovni bazi %s';

$strSave = 'Shrani';
$strScaleFactorSmall = 'Faktor pove�ava je premajhen, da bi spravili shemo na eno stran';
$strSearchFormTitle = 'I��i v podatkovni bazi';
$strSearchInTables = 'V tabelah:';
$strSearch = 'Iskanje';
$strSearchNeedle = 'Iskane besede ali vrednosti (nadomestni znak: "%"):';
$strSearchOption1 = 'katerokoli besedo';
$strSearchOption2 = 'vse besede';
$strSearchOption3 = 'to�no dolo�eno frazo';
$strSearchOption4 = 'kot \'regular expression\'';
$strSearchResultsFor = 'Rezultati iskanja "<i>%s</i>" %s:';
$strSearchType = 'Najdi:';
$strSelectADb = 'Prosimo, izberite podatkovno bazo';
$strSelectAll = 'Izberi vse';
$strSelectFields = 'Izberite polja (vsaj eno):';
$strSelect = 'Izberi';
$strSelectNumRows = 'in poizvedba';
$strSelectTables = 'Izberi tabele';
$strSend = 'Shrani kot datoteko';
$strServerChoice = 'Izbira stre�nika';
$strServerVersion = 'Razli�ica stre�nika';
$strSetEnumVal = '�e je polje vrste "enum" ali "set", navedite vrednosti v obliki: \'a\',\'b\',\'c\'...<br /> �e �elite med vrednostmi uporabiti po�evnico ("\") ali enojni narekovaj ("\'"), pred tem znakom vnesite po�evnico (n.pr. \'\\\\xyz\' ali \'a\\\'b\').';
$strShowAll = 'Poka�i vse';
$strShowColor = 'Poka�i barvo';
$strShowCols = 'Poka�i stolpce';
$strShowGrid = 'Poka�i mre�o';
$strShowingRecords = 'Prikazujem vrstice';
$strShowPHPInfo = 'Poka�i podatke o PHP';
$strShow = 'Poka�i';
$strShowTableDimension = 'Poka�i dimenzije tabel';
$strShowTables = 'Poka�i tabele';
$strShowThisQuery = ' Ponovno poka�i poizvedbo v tem oknu ';
$strSingly = '(posamezno)';
$strSize = 'Velikost';
$strSort = 'Sortiraj';
$strSpaceUsage = 'Poraba prostora';
$strSplitWordsWithSpace = 'Besede so lo�ene s presledkom (" ").';
$strSQLQuery = 'SQL-poizvedba';
$strSQLResult = 'Rezultat SQL';
$strSQL = 'SQL';
$strStatement = 'Izjave';
$strStrucCSV = 'CSV podatki';
$strStrucData = 'Struktura in podatki';
$strStrucDrop = 'Dodaj \'drop table\' poizvedbo';
$strStrucExcelCSV = 'CSV podatki za Ms Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlagaj strukturo tabele';
$strStructure = 'Struktura';
$strSubmit = 'Po�lji';
$strSuccess = 'SQL-poizvedba je bila uspe�no izvedena';
$strSum = 'Vsota';

$strTableComments = 'Komentar tabele';
$strTableEmpty = 'Ime tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je zavr�ena';
$strTableHasBeenEmptied = 'Tabela %s je izpraznjena';
$strTableHasBeenFlushed = 'Tabela %s je osve�ena';
$strTableMaintenance = 'Vzdr�evanje tabele';
$strTables = '%s tabel';
$strTableStructure = 'Struktura tabele';
$strTable = 'tabela ';
$strTableType = 'Vrsta tabele';
$strTextAreaLength = ' Zaradi njegove dol�ine<br /> polja ne bo mogo�e urejati ';
$strTheContents = 'Vsebina datoteke zamenja vsebino izbrane tabele v vrsticah z identi�nim primarnim ali unikatnim klju�em.';
$strTheContent = 'Vsebina datoteke je vne�ena.';
$strTheTerminator = 'Zaklju�ni znak polj.';
$strTotal = 'skupaj';
$strType = 'Vrsta';

$strUncheckAll = 'Odzna�i vse';
$strUnique = 'Unikaten';
$strUnselectAll = 'Prekli�i izbor vsega';
$strUpdatePrivMessage = 'Posodobili ste privilegije za %s.';
$strUpdateProfileMessage = 'Profil je posodobljen.';
$strUpdateProfile = 'Posodobi profil:';
$strUpdateQuery = 'Osve�i poizvedbo';
$strUsage = 'Uporaba';
$strUseBackquotes = 'Obdaj imena tabel in polj z enojnimi po�evnimi narekovaji';
$strUserEmpty = 'Uporabni�ko ime je prazno!';
$strUserName = 'Uporabni�ko ime';
$strUsers = 'Uporabniki';
$strUser = 'Uporabnik';
$strUseTables = 'Uporabi tabele';

$strValidateSQL = 'Preveri pravilnost SQL stavka';
$strValue = 'Vrednost';
$strViewDumpDB = 'Preglej dump (shemo) podatkovne baze';
$strViewDump = 'Preglej dump (shemo) tabele';

$strWelcome = 'Dobrodo�li v %s';
$strWithChecked = 'Z ozna�enim:';
$strWrongUser = 'Napa�no uporabni�ko ime/geslo. Dostop zavrnjen.';

$strYes = 'Da';

$strZip = '"zipano"';
// To translate


$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCharsetOfFile = 'Character set of the file:'; //to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate

?>
