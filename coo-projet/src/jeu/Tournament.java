package jeu ;
import util.*;
import java.util.* ;

/**
*
* This class represents a Tournament. It extends from Competition class.
* The particularity of a Tournament is that after a match, the loser doesnt play the Tournament anymore. Then, the tournament end when everybody is eliminated excpet one Competitor, the winner.
*
*@author Havart Florentin - Bugnon Florentin
*@version 3.0
 */
public class Tournament extends Competition {

	/**
	 * @param lc the list of competitor
	 */
	public Tournament(List<Competitor> lc){
		super(lc) ;
	}



	/**
	* Play the Tournament until everybody is eliminated except the winner.
	* It displays every step of the tournament and show the ranking at the end.
	 *
	 *
	 * @throws listSizeException
	 */
	@Override
	public void play() throws listSizeException {
		this.match=new Match(this.matchlistener);

		if ((this.getCompetitors().size() & (this.getCompetitors().size() - 1)) != 0){
			throw new listSizeException("Le nombre de joueur doit être une puissance de 2") ;
		}


		List<Competitor> lc2 = new ArrayList<Competitor>(this.getCompetitors());

		while(lc2.size() > 1){
			int taille =lc2.size();
			for (int i=0; i<taille/2;i++) {
				Competitor winner = this.getMatch().playMatch(this.getCompetitors().get(this.getCompetitors().indexOf(lc2.get(i))),this.getCompetitors().get(this.getCompetitors().indexOf(lc2.get(i+1))));
				if (winner == lc2.get(i)){
					lc2.remove(i+1) ;
				}
				else {
					lc2.remove(i) ;
				}
			}
		}
		System.out.println(lc2.get(0).getName() +" WINS THE COMPETITION") ;

	}
}
