package jeu ;
import util.*;
import java.util.List;

/**
 * This class represents a League. It extends from Competition class.
 * The particularity of a league is that everybody play against everybody. Then we check the ranking to know who is the winner.
 *
 *@author Havart Florentin - Bugnon Florentin
 *@version 3.0
 */
public class League extends Competition {

	/**
	 * @param lc is the list of competitor
	 */
	public League(List<Competitor> lc){
		super(lc) ;
	}



	/**
	 * Play the league. Display the ranking at the end
	 *
	 *
	 *
	 * @throws listSizeException
	 */
	@Override
	public void play() throws listSizeException {
		this.match=new Match(this.matchlistener);
		if(this.getCompetitors().size() < 2){
			throw new listSizeException("Il faut minimum 2 joueurs") ;
		}
		else {
			for (int i=0; i<this.getCompetitors().size();i++) {
				for (int j=0; j<this.getCompetitors().size();j++){
					if (i != j){
						this.getMatch().playMatch(this.getCompetitors().get(i), this.getCompetitors().get(j)) ;
					}
				}
			}
		}

	}
	/*
@Override
public void playMatch(Competitor c1, Competitor c2) {
	// TODO Auto-generated method stub

}*/
}
