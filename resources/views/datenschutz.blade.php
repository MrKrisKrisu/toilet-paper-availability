@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="py-5">
            <h1>Datenschutzerklärung</h1>
            <a href="/">Zurück zur Startseite</a>
            <h2>Einleitung</h2>
            <p>Mit der folgenden Datenschutzerklärung möchten wir Sie darüber aufklären, welche Arten Ihrer
                personenbezogenen Daten (nachfolgend auch kurz als "Daten“ bezeichnet) wir zu welchen Zwecken und in
                welchem Umfang verarbeiten. Die Datenschutzerklärung gilt für alle von uns durchgeführten Verarbeitungen
                personenbezogener Daten, sowohl im Rahmen der Erbringung unserer Leistungen als auch insbesondere auf
                unseren Webseiten, in mobilen Applikationen sowie innerhalb externer Onlinepräsenzen, wie z.B. unserer
                Social-Media-Profile (nachfolgend zusammenfassend bezeichnet als "Onlineangebot“).</p>
            <p>Die verwendeten Begriffe sind nicht geschlechtsspezifisch.</p>
            <p>Stand: 26. Oktober 2020</p>
            <h2>Inhaltsübersicht</h2>
            <ul class="index">
                <li><a class="index-link" href="#m14">Einleitung</a></li>
                <li><a class="index-link" href="#m3">Verantwortlicher</a></li>
                <li><a class="index-link" href="#mOverview">Übersicht der Verarbeitungen</a></li>
                <li><a class="index-link" href="#m13">Maßgebliche Rechtsgrundlagen</a></li>
                <li><a class="index-link" href="#m225">Bereitstellung des Onlineangebotes und Webhosting</a></li>
                <li><a class="index-link" href="#m15">Änderung und Aktualisierung der Datenschutzerklärung</a></li>
                <li><a class="index-link" href="#m10">Rechte der betroffenen Personen</a></li>
            </ul>
            <h2 id="m3">Verantwortlicher</h2>
            <p>{{ config('app.imprint.name') }} <br>
                {{ config('app.imprint.address') }}<br>
                {{ config('app.imprint.city') }} <br>
            <p><strong>E-Mail-Adresse:</strong> {{ config('app.imprint.email') }}</p>
            <h2 id="mOverview">Übersicht der Verarbeitungen</h2>
            <p>Die nachfolgende Übersicht fasst die Arten der verarbeiteten Daten und die Zwecke ihrer Verarbeitung
                zusammen und verweist auf die betroffenen Personen.</p>
            <h3>Arten der verarbeiteten Daten</h3>
            <ul>
                <li>Inhaltsdaten (z.B. Eingaben in Onlineformularen).</li>
                <li>Meta-/Kommunikationsdaten (z.B. Geräte-Informationen, IP-Adressen).</li>
                <li>Nutzungsdaten (z.B. besuchte Webseiten, Interesse an Inhalten, Zugriffszeiten).</li>
            </ul>
            <h3>Kategorien betroffener Personen</h3>
            <ul>
                <li>Nutzer (z.B. Webseitenbesucher, Nutzer von Onlinediensten).</li>
            </ul>
            <h3 id="m13">Maßgebliche Rechtsgrundlagen</h3>
            <p>Im Folgenden teilen wir die Rechtsgrundlagen der Datenschutzgrundverordnung (DSGVO), auf deren Basis wir
                die personenbezogenen Daten verarbeiten, mit. Bitte beachten Sie, dass zusätzlich zu den Regelungen der
                DSGVO die nationalen Datenschutzvorgaben in Ihrem bzw. unserem Wohn- und Sitzland gelten können. Sollten
                ferner im Einzelfall speziellere Rechtsgrundlagen maßgeblich sein, teilen wir Ihnen diese in der
                Datenschutzerklärung mit.</p>
            <ul>
                <li><strong>Berechtigte Interessen (Art. 6 Abs. 1 S. 1 lit. f. DSGVO)</strong> - Die Verarbeitung ist
                    zur Wahrung der berechtigten Interessen des Verantwortlichen oder eines Dritten erforderlich, sofern
                    nicht die Interessen oder Grundrechte und Grundfreiheiten der betroffenen Person, die den Schutz
                    personenbezogener Daten erfordern, überwiegen.
                </li>
            </ul>
            <p><strong>Nationale Datenschutzregelungen in Deutschland</strong>: Zusätzlich zu den Datenschutzregelungen
                der Datenschutz-Grundverordnung gelten nationale Regelungen zum Datenschutz in Deutschland. Hierzu
                gehört insbesondere das Gesetz zum Schutz vor Missbrauch personenbezogener Daten bei der
                Datenverarbeitung (Bundesdatenschutzgesetz – BDSG). Das BDSG enthält insbesondere Spezialregelungen zum
                Recht auf Auskunft, zum Recht auf Löschung, zum Widerspruchsrecht, zur Verarbeitung besonderer
                Kategorien personenbezogener Daten, zur Verarbeitung für andere Zwecke und zur Übermittlung sowie
                automatisierten Entscheidungsfindung im Einzelfall einschließlich Profiling. Des Weiteren regelt es die
                Datenverarbeitung für Zwecke des Beschäftigungsverhältnisses (§ 26 BDSG), insbesondere im Hinblick auf
                die Begründung, Durchführung oder Beendigung von Beschäftigungsverhältnissen sowie die Einwilligung von
                Beschäftigten. Ferner können Landesdatenschutzgesetze der einzelnen Bundesländer zur Anwendung gelangen.
            </p>
            <h2 id="m225">Bereitstellung des Onlineangebotes und Webhosting</h2>
            <p>Um unser Onlineangebot sicher und effizient bereitstellen zu können, nehmen wir die Leistungen von einem
                oder mehreren Webhosting-Anbietern in Anspruch, von deren Servern (bzw. von ihnen verwalteten Servern)
                das Onlineangebot abgerufen werden kann. Zu diesen Zwecken können wir Infrastruktur- und
                Plattformdienstleistungen, Rechenkapazität, Speicherplatz und Datenbankdienste sowie
                Sicherheitsleistungen und technische Wartungsleistungen in Anspruch nehmen.</p>
            <p>Zu den im Rahmen der Bereitstellung des Hostingangebotes verarbeiteten Daten können alle die Nutzer
                unseres Onlineangebotes betreffenden Angaben gehören, die im Rahmen der Nutzung und der Kommunikation
                anfallen. Hierzu gehören regelmäßig die IP-Adresse, die notwendig ist, um die Inhalte von
                Onlineangeboten an Browser ausliefern zu können, und alle innerhalb unseres Onlineangebotes oder von
                Webseiten getätigten Eingaben.</p>
            <p><strong>Erhebung von Zugriffsdaten und Logfiles</strong>: Wir selbst (bzw. unser Webhostinganbieter)
                erheben Daten zu jedem Zugriff auf den Server (sogenannte Serverlogfiles). Zu den Serverlogfiles können
                die Adresse und Name der abgerufenen Webseiten und Dateien, Datum und Uhrzeit des Abrufs, übertragene
                Datenmengen, Meldung über erfolgreichen Abruf, Browsertyp nebst Version, das Betriebssystem des Nutzers,
                Referrer URL (die zuvor besuchte Seite) und im Regelfall IP-Adressen und der anfragende Provider
                gehören.</p>
            <p>Die Serverlogfiles können zum einen zu Zwecken der Sicherheit eingesetzt werden, z.B., um eine
                Überlastung der Server zu vermeiden (insbesondere im Fall von missbräuchlichen Angriffen, sogenannten
                DDoS-Attacken) und zum anderen, um die Auslastung der Server und ihre Stabilität sicherzustellen.</p>
            <ul class="m-elements">
                <li><strong>Verarbeitete Datenarten:</strong> Inhaltsdaten (z.B. Eingaben in Onlineformularen),
                    Nutzungsdaten (z.B. besuchte Webseiten, Interesse an Inhalten, Zugriffszeiten),
                    Meta-/Kommunikationsdaten (z.B. Geräte-Informationen, IP-Adressen).
                </li>
                <li><strong>Betroffene Personen:</strong> Nutzer (z.B. Webseitenbesucher, Nutzer von Onlinediensten).
                </li>
                <li><strong>Rechtsgrundlagen:</strong> Berechtigte Interessen (Art. 6 Abs. 1 S. 1 lit. f. DSGVO).</li>
            </ul>
            <h2 id="m15">Änderung und Aktualisierung der Datenschutzerklärung</h2>
            <p>Wir bitten Sie, sich regelmäßig über den Inhalt unserer Datenschutzerklärung zu informieren. Wir passen
                die Datenschutzerklärung an, sobald die Änderungen der von uns durchgeführten Datenverarbeitungen dies
                erforderlich machen. Wir informieren Sie, sobald durch die Änderungen eine Mitwirkungshandlung
                Ihrerseits (z.B. Einwilligung) oder eine sonstige individuelle Benachrichtigung erforderlich wird.</p>
            <p>Sofern wir in dieser Datenschutzerklärung Adressen und Kontaktinformationen von Unternehmen und
                Organisationen angeben, bitten wir zu beachten, dass die Adressen sich über die Zeit ändern können und
                bitten die Angaben vor Kontaktaufnahme zu prüfen.</p>
            <h2 id="m10">Rechte der betroffenen Personen</h2>
            <p>Ihnen stehen als Betroffene nach der DSGVO verschiedene Rechte zu, die sich insbesondere aus Art. 15 bis
                21 DSGVO ergeben:</p>
            <ul>
                <li><strong>Widerspruchsrecht: Sie haben das Recht, aus Gründen, die sich aus Ihrer besonderen Situation
                        ergeben, jederzeit gegen die Verarbeitung der Sie betreffenden personenbezogenen Daten, die
                        aufgrund von Art. 6 Abs. 1 lit. e oder f DSGVO erfolgt, Widerspruch einzulegen; dies gilt auch
                        für ein auf diese Bestimmungen gestütztes Profiling. Werden die Sie betreffenden
                        personenbezogenen Daten verarbeitet, um Direktwerbung zu betreiben, haben Sie das Recht,
                        jederzeit Widerspruch gegen die Verarbeitung der Sie betreffenden personenbezogenen Daten zum
                        Zwecke derartiger Werbung einzulegen; dies gilt auch für das Profiling, soweit es mit solcher
                        Direktwerbung in Verbindung steht.</strong></li>
                <li><strong>Widerrufsrecht bei Einwilligungen:</strong> Sie haben das Recht, erteilte Einwilligungen
                    jederzeit zu widerrufen.
                </li>
                <li><strong>Auskunftsrecht:</strong> Sie haben das Recht, eine Bestätigung darüber zu verlangen, ob
                    betreffende Daten verarbeitet werden und auf Auskunft über diese Daten sowie auf weitere
                    Informationen und Kopie der Daten entsprechend den gesetzlichen Vorgaben.
                </li>
                <li><strong>Recht auf Berichtigung:</strong> Sie haben entsprechend den gesetzlichen Vorgaben das Recht,
                    die Vervollständigung der Sie betreffenden Daten oder die Berichtigung der Sie betreffenden
                    unrichtigen Daten zu verlangen.
                </li>
                <li><strong>Recht auf Löschung und Einschränkung der Verarbeitung:</strong> Sie haben nach Maßgabe der
                    gesetzlichen Vorgaben das Recht, zu verlangen, dass Sie betreffende Daten unverzüglich gelöscht
                    werden, bzw. alternativ nach Maßgabe der gesetzlichen Vorgaben eine Einschränkung der Verarbeitung
                    der Daten zu verlangen.
                </li>
                <li><strong>Recht auf Datenübertragbarkeit:</strong> Sie haben das Recht, Sie betreffende Daten, die Sie
                    uns bereitgestellt haben, nach Maßgabe der gesetzlichen Vorgaben in einem strukturierten, gängigen
                    und maschinenlesbaren Format zu erhalten oder deren Übermittlung an einen anderen Verantwortlichen
                    zu fordern.
                </li>
                <li><strong>Beschwerde bei Aufsichtsbehörde:</strong> Sie haben ferner nach Maßgabe der gesetzlichen
                    Vorgaben das Recht, bei einer Aufsichtsbehörde, insbesondere in dem Mitgliedstaat Ihres gewöhnlichen
                    Aufenthaltsorts, Ihres Arbeitsplatzes oder des Orts des mutmaßlichen Verstoßes Beschwerde
                    einzulegen, wenn Sie der Ansicht sind, dass die Verarbeitung der Sie betreffenden personenbezogenen
                    Daten gegen die DSGVO verstößt.
                </li>
            </ul>
            <p class="seal"><a href="https://datenschutz-generator.de/?l=de"
                               target="_blank" rel="noopener noreferrer nofollow">Erstellt mit kostenlosem
                    Datenschutz-Generator.de von Dr. Thomas Schwenke</a></p>
            <a href="/">Zurück zur Startseite</a>
        </div>

    </div>
@endsection
