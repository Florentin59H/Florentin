cls:
	cd ./src ; javac ./jeu/*.java -d ../classes

doc:
	cd ./src ; javadoc ./jeu/*.java -d ../doc

archiveTournament: cls
	cd ./classes ; jar cvmf ../jar/MANIFESTTOURNAMENT.MF ../jar/Tournament.jar jeu util

archiveLeague: cls
	cd ./classes ; jar cvmf ../jar/MANIFESTLEAGUE.MF ../jar/League.jar jeu util

archiveMaster: cls
	cd ./classes ; jar cvmf ../jar/MANIFESTMASTER.MF ../jar/Master.jar jeu util

playTournament : archiveTournament
	cd ./jar ; java -jar Tournament.jar

playLeague : archiveLeague
	cd ./jar ; java -jar League.jar

playMaster : archiveMaster
	cd ./jar ; java -jar Master.jar

clean: doc cls archiveLeague archiveMaster archiveTournament
	rm -r doc
	rm -r classes
	rm ./jar/League.jar
	rm ./jar/Master.jar
	rm ./jar/Tournament.jar
