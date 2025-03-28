# Kubernetes II

Grundlagen für diesen Auftrag:

[TBZ: Kubernetes Architektur]
[TBZ: Kubernetes Tutorial]
[TBZ: Demo Projekt]
[TBZ: Sicherheitsaspekte]


## A) Begriffe und Konzepte erlernen (40%)
Lesen Sie sich ein in die Begriffe und Konzepte im Tutorial.
Abgaben

Erklären Sie den Unterschied zwischen Pods und Replicas mit eigenen Worten.
Erklären Sie den Unterschied zwischen Service und Deployment mit eigenen Worten.
Welches Problem löst Ingress? Beantworten Sie die Frage in eigenen Worten.
Für was ist ein statefulset? Beantworten Sie die Frage in eigenen Worten. Geben Sie ein mögliches Beispiel - aber keine Datenbank.


## B) Demo Projekt (60%)
Erstellen Sie das Demo Projekt auf Ihrem eigenen Kubernetes Cluster (mit mind. 3 nodes).
Abgaben und weitere Tasks


Sie haben in Teil A Begrifflichkeiten erklärt und hier in Teil B ein Projekt durchgeführt. Sie haben einen Teil der Services nicht so umgesetzt wie in den Begrifflichkeiten/im Tutorial erklärt. Begründen Sie welcher Teil das ist und wieso? (Tipp: es geht um die Datenbank)


In der ConfigMap.yaml haben Sie die MongoUrl definiert, resp. sie war bereits definiert. Erklären Sie wieso der angegebene Wert korrekt ist.


Zeigen Sie, dass die App installiert wurde. rufen Sie den Befehl microk8s kubectl describe service webapp-service auf mindestens zwei Nodes auf und erstellen Sie Screenshots des Resultats.


Rufen Sie nun den gleichen Befehl für den zweiten Service auf (nur auf einem der Nodes). Erstellen Sie einen Screenshot. Es gibt Unterschiede. Erklären Sie die Unterschiede in ein paar kurzen Sätzen.


Finden Sie heraus wie Sie die Webseite nun aufrufen können. Die Service-Konfiguration der Web-App sollte Auskunft geben. Erstellen Sie einen Screenshot der Seite, inkl. URL von mindestens zwei Nodes des Clusters und erklären Sie was Sie tun mussten.


Versuchen Sie sich mit der MongoDB zu verbinden, indem Sie von Ihrem Computer mit MongoDB Compass darauf zugreifen. Wieso geht es nicht? Begründen Sie was man im Service/Deployment ändern könnte, so dass es anschliessend geht?


Ändern Sie nun eine Service Definition und exponieren Sie den Port 32000 anstatt 30100. Wenn Sie schon dabei sind erhöhen Sie die replicas auf 3. Erklären Sie welche Schritte Sie durchführen müssen und führen Sie sie auch durch. Erstellen Sie nochmals einen Screenshot (von einem Node) mit der funktionierenden Webseite. Erstellen Sie auch nochmals einen Screenshot des Befehls microk8s kubectl describe service webapp-service. Sehen Sie den Unterschied in den Replicas?