<?php $lang = (isset($_GET['lang']))? $_GET['lang'] : ""; ?><?php if($lang == "fr" ){?>	<x><rs n="wall" c="submit,logwait,logretry,logintro,logcode,errcode"><r><c n="submit"><![CDATA[ENVOYER]]></c><c n="logwait"><![CDATA[Vérification de votre code d'identification d'élève. Veuillez patienter...]]></c><c n="logretry"><![CDATA[Votre code d'identification d'élève n'a pas été reconnu. Veuillez réessayer.]]></c><c n="logintro"><![CDATA[Veuillez saisir votre code d'identification d'élève.]]></c><c n="logcode"><![CDATA[Votre code d'identification d'élève a été validé.]]></c><c n="errcode"><![CDATA[Veuillez saisir votre code d'identification d'élève.]]></c></r></rs></x><?php } elseif($lang == "es" ){?>	<x><rs n="wall" c="submit,logwait,logretry,logintro,logcode,errcode"><r><c n="submit"><![CDATA[ENVIAR]]></c><c n="logwait"><![CDATA[Comprobando tu Código de Identificación de Estudiante. Espera...]]></c><c n="logretry"><![CDATA[No se ha reconocido tu Código de Identificación de Estudiante. Vuelve a intentarlo.]]></c><c n="logintro"><![CDATA[Introduce tu Código de Identificación de Estudiante.]]></c><c n="logcode"><![CDATA[Código de Identificación de Estudiante confirmado.]]></c><c n="errcode"><![CDATA[Introduce tu Código de Identificación de Estudiante.]]></c></r></rs></x><?php } elseif($lang == "de" ){?>	<x><rs n="wall" c="submit,logwait,logretry,logintro,logcode,errcode"><r><c n="submit"><![CDATA[SENDEN]]></c><c n="logwait"><![CDATA[Schüleridentifizierungscode wird überprüft. Bitte warten...]]></c><c n="logretry"><![CDATA[Dein Schüleridentifizierungscode wurde nicht erkannt. Versuche es noch einmal.]]></c><c n="logintro"><![CDATA[Gib deinen Schüleridentifizierungscode ein.]]></c><c n="logcode"><![CDATA[Dein Schüleridentifizierungscode wurde bestätigt.]]></c><c n="errcode"><![CDATA[Gib deinen Schüleridentifizierungscode ein.]]></c></r></rs></x><?php } elseif($lang == "it" ){?>	<x><rs n="wall" c="submit,logwait,logretry,logintro,logcode,errcode"><r><c n="submit"><![CDATA[INVIA]]></c><c n="logwait"><![CDATA[Stiamo controllando il tuo Codice d’identificazione studente. Attendi, per favore...]]></c><c n="logretry"><![CDATA[Il tuo Codice d’identificazione studente non è stato riconosciuto. Riprova.]]></c><c n="logintro"><![CDATA[Inserisci il tuo Codice d’identificazione studente.]]></c><c n="logcode"><![CDATA[Il tuo Codice d’identificazione studente è stato confermato.]]></c><c n="errcode"><![CDATA[Inserisci il tuo Codice d’identificazione studente.]]></c></r></rs></x><?php } elseif($lang == "ja" ){?>	<x><rs n="wall" c="submit,logwait,logretry,logintro,logcode,errcode"><r><c n="submit"><![CDATA[提出]]></c><c n="logwait"><![CDATA[学生認識コードを確認しています。お待ちください...]]></c><c n="logretry"><![CDATA[学生認識コードが確認できませんでした。やり直してください。]]></c><c n="logintro"><![CDATA[学生認識コードを入力してください。]]></c><c n="logcode"><![CDATA[学生認識コードが確認されました。]]></c><c n="errcode"><![CDATA[学生認識コードを入力してください。]]></c></r></rs></x><?php } else {?>	<x><rs n="wall" c="submit,logwait,logretry,logintro,logcode,errcode"><r><c n="submit"><![CDATA[SUBMIT]]></c><c n="logwait"><![CDATA[Checking your Student Identification Code.Please wait...]]></c><c n="logretry"><![CDATA[Your Student Identification Code was not recognised.Please try again.]]></c><c n="logintro"><![CDATA[Please enter your Student Identification Code.]]></c><c n="logcode"><![CDATA[Your Student Identification Code has been confirmed.]]></c><c n="errcode"><![CDATA[Please enter your Student Identification Code.]]></c></r></rs></x><?php } ?>