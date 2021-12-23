package jeu ;
import util.*;
import java.util.*;

/**
*
* This class represents a Master. It extends from Competition class.
* The particularity of a Master is that there is 2 step, first there is a group stage phase. Then there is tournament phase.
*
*@author Havart Florentin - Bugnon Florentin
*@version 3.0
 */
public class Master extends Competition {


	/**
	 * gs represents the groupStage format used for that Master.
	 */
	private GroupStage gs;
	/**
	 * @param lc the list of competitor
	 * @param gs is the groupstage format we use for the groupstage phase.
	 */
	public Master(List<Competitor> lc, GroupStage gs){
		super(lc) ;
		this.gs = gs;
	}


	/**
	 * @return the GroupStage
	 */
	public GroupStage getGroupStage(){
		return this.gs;
	}



	/**
	* Play the Master until everybody is eliminated except the winner.
	* It displays every step of the tournament and show the ranking at the end.
	 * The winner is not the Competitor with most wins. It's the one who win the Elimination Phase.
	 *
	 * @throws listSizeException
	 */
	@Override
	public void play() throws listSizeException {

		if ((this.getCompetitors().size() & (this.getCompetitors().size() - 1)) != 0){
			throw new listSizeException("Le nombre de joueur doit être une puissance de 2") ;
		}
		System.out.println("--- Group Stage ---") ;
		this.getGroupStage().addListerTab(this.matchlistener);
		this.getGroupStage().play();

		System.out.println("--- Elmination phase ---") ;
		Tournament tournament = new Tournament(this.getGroupStage().getQualified());

		Iterator<MatchListener> i = this.matchlistener.iterator();
	    while (i.hasNext()) {
	    	tournament.addListener(i.next());
	    }

		tournament.play();


	}

	/**
	* select and create the list of qualified Competitor
	 *
	 * @return the list of qualified Competitor.
	 */


}
