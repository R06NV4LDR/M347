# Kubernetes I

Grundlagen für diesen Auftrag:

TBZ: Kubernetes Architektur
TBZ: MicroK8s
TBZ: Sicherheitsaspekte


## A) Installation (50%)
[cloud-init.yaml](./microk8s.yaml)
Folgen Sie der Installationsanleitung für [MikroK8s auf AWS](https://gitlab.com/ch-tbz-it/Stud/m347/-/tree/main/Kubernetes/microk8s). Sie sollten nun einen Cluster mit drei Nodes haben.

Abgaben:

- Rufen Sie den Befehl `microk8s kubectl get nodes` auf einem der Nodes auf und zeigen Sie mit einem Screenshot, dass alle drei Nodes hinzugefügt wurden


## B) Verständnis für Cluster (50%)
Führen Sie folgende Schritte durch und erstellen Sie die entsprechenden Screenshots dazwischen. Schauen Sie also zuerst nach, welche Screenshots erwartet sind:

- Rufen Sie `microk8s kubectl get nodes` auf einem zweiten der drei Instanzen auf. Dokumentieren Sie das Resultat mit Screenshots
- Rufen Sie den Befehl microk8s status auf und schauen Sie die ersten paar Zeilen an (vor "addons"). Was bedeuten diese. Sie finden mehr Information in der Installationsanleitung des Herstellers der Sie gefolgt sind im Kapitel High Availability. Erstellen Sie einen Screenshot und einen Erklärungstext.
- Entfernen Sie einen Node vom Cluster. Welche Befehle müssen Sie aufrufen? Zeigen Sie die Resultate der Befehle mit Screenshots.
- Fügen Sie nun den Node wieder dem Cluster hinzu, aber dieses Mal als Worker (--worker)
- Rufen Sie nochmals den Befehl `microk8s` status auf. Was ist der Unterschied und woher kommt dieser. Erstellen Sie einen Screenshot und einen Erklärungstext
- Rufen Sie nochmals microk8s kubectl get nodes auf, sowohl auf einem der Master als auch auf dem Worker. Dokumentieren Sie die Resultate mit Screenshots. Wieso stimmt dies überein  mit dem Result des Befehls microk8s status?

Abgaben:

Erklären Sie den Unterschied zwischen den Befehlen microk8s und microk8s kubectl mit eigenen Worten.
Gemäss den obenstehenden Schritten