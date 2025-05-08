# Kubernetes II
- [KN07: Kubernetes II](#kubernetes-ii)
    - [A) Begriffe und Konzepte erlernen](#a-begriffe-und-konzepte-erlernen-40)
    - [B) Demo Projekt](#b-demo-projekt-60)

**Grundlagen für diesen Auftrag:**
- [Auftrag KN06: Kubernetes II](https://gitlab.com/ch-tbz-it/Stud/m347/-/blob/main/Leistungsbeurteilung/KN07/KN07.md?ref_type=heads)
- [TBZ: Kubernetes Architektur](https://gitlab.com/ch-tbz-it/Stud/m347/-/tree/main/Kubernetes)
- [TBZ: Kubernetes Tutorial](https://gitlab.com/ch-tbz-it/Stud/m347/-/tree/main/Kubernetes/Tutorial)
- [TBZ: Demo Projekt](https://gitlab.com/ch-tbz-it/Stud/m347/-/tree/main/Kubernetes/Demo%20Project)
- [TBZ: Sicherheitsaspekte](https://gitlab.com/ch-tbz-it/Stud/m347/-/tree/main/Kubernetes/Sicherheitsaspekte)


## A) Begriffe und Konzepte erlernen (40%)
Lesen Sie sich ein in die Begriffe und Konzepte im Tutorial.

**Abgaben**

### Unterschied zwischen Pods und Replicas

Ein **Pod** ist die kleinste Ausführungseinheit in Kubernetes und enthält einen oder mehrere Container, die sich Ressourcen wie Netzwerk und Speicher teilen. Eine **Replica** hingegen bezeichnet, wie oft ein bestimmter Pod repliziert werden soll. Wenn ich z. B. 3 Replicas für einen Pod definiere, sorgt Kubernetes dafür, dass dieser Pod drei Mal gleichzeitig läuft – verteilt auf verschiedene Nodes, falls möglich – um Ausfallsicherheit und Lastverteilung zu erreichen.
![Pods & Replicas](../image/PotsRecplica.webp)
### Unterschied zwischen Service und Deployment

Ein **Deployment** beschreibt den gewünschten Zustand einer Anwendung, z. B. wie viele Instanzen (Replicas) laufen sollen und welches Container-Image verwendet wird. Kubernetes sorgt dann automatisch dafür, dass dieser Zustand eingehalten wird. Ein **Service** wiederum ist eine abstrakte Schnittstelle, die den Zugriff auf die Pods erlaubt – unabhängig davon, auf welchem Node sie laufen oder wie oft sie repliziert wurden. Der Service balanciert die Anfragen automatisch auf die laufenden Pods.

### Welches Problem löst Ingress?

Ein **Ingress** löst das Problem, mehrere Services über einen einzigen Einstiegspunkt erreichbar zu machen – z. B. über eine einzige öffentliche IP-Adresse oder Domain. So kann ich z. B. über verschiedene Pfade oder Subdomains unterschiedliche Services erreichen, ohne jeden Service einzeln nach außen exposen zu müssen.
### Für was ist ein statefulset?
Ein **StatefulSet** ist dafür gedacht, Pods mit persistenter Identität zu verwalten. Es sorgt dafür, dass Pods immer mit derselben Netzwerkkennung und denselben Speicher-Ressourcen wiederhergestellt werden. Das ist besonders wichtig bei zustandsbehafteten Anwendungen wie z. B. Message Brokern oder Speicherlösungen.
**Beispiel**: Eine Anwendung wie ein verteiltes Dateisystem (z. B. Ceph oder GlusterFS), bei dem jeder Node eine eindeutige Rolle und persistenten Speicher braucht.

## B) Demo Projekt (60%)
Erstellen Sie das Demo Projekt auf Ihrem eigenen Kubernetes Cluster (mit mind. 3 nodes).

**Abgaben und weitere Tasks**

- Sie haben in Teil A Begrifflichkeiten erklärt und hier in Teil B ein Projekt durchgeführt. Sie haben einen Teil der Services nicht so umgesetzt wie in den Begrifflichkeiten/im Tutorial erklärt. Begründen Sie welcher Teil das ist und wieso? (Tipp: es geht um die Datenbank)


- In der ConfigMap.yaml haben Sie die MongoUrl definiert, resp. sie war bereits definiert. Erklären Sie wieso der angegebene Wert korrekt ist.


- Zeigen Sie, dass die App installiert wurde. rufen Sie den Befehl microk8s kubectl describe service webapp-service auf mindestens zwei Nodes auf und erstellen Sie Screenshots des Resultats.


- Rufen Sie nun den gleichen Befehl für den zweiten Service auf (nur auf einem der Nodes). Erstellen Sie einen Screenshot. Es gibt Unterschiede. Erklären Sie die Unterschiede in ein paar kurzen Sätzen.


- Finden Sie heraus wie Sie die Webseite nun aufrufen können. Die Service-Konfiguration der Web-App sollte Auskunft geben. Erstellen Sie einen Screenshot der Seite, inkl. URL von mindestens zwei Nodes des Clusters und erklären Sie was Sie tun mussten.


- Versuchen Sie sich mit der MongoDB zu verbinden, indem Sie von Ihrem Computer mit MongoDB Compass darauf zugreifen. Wieso geht es nicht? Begründen Sie was man im Service/Deployment ändern könnte, so dass es anschliessend geht?


Ändern Sie nun eine Service Definition und exponieren Sie den Port 32000 anstatt 30100. Wenn Sie schon dabei sind erhöhen Sie die replicas auf 3. Erklären Sie welche Schritte Sie durchführen müssen und führen Sie sie auch durch. Erstellen Sie nochmals einen Screenshot (von einem Node) mit der funktionierenden Webseite. Erstellen Sie auch nochmals einen Screenshot des Befehls microk8s kubectl describe service webapp-service. Sehen Sie den Unterschied in den Replicas?


## Quellen
- [Replica Sets Bild](https://theithollow.com/2019/01/28/kubernetes-replica-sets/)


[top](#kubernetes-ii)