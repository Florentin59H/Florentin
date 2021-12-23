package jeu ;
import util.*;
import java.util.* ;

/**
*
* This class represents a GroupStage. It extends from Competition class.
* The particularity of a GroupStage is that a league take place for each group.
*
*@author Havart Florentin - Bugnon Florentin
*@version 3.0
 */
public class GroupStage extends Competition {

	private GroupeStageStrategy strategy;

	/**
	 * @param lc the list of competitor
	 * @param strategy the strategy we use to select the qualified.
	 *
	 */
	public GroupStage(List<Competitor> lc, GroupeStageStrategy strategy) throws listSizeException{
			super(lc) ;
			this.strategy=strategy;

	}

	/**
	 * return the strategy used for the GroupStage
	 * @return GroupStageStrategy.
	 *
	 */
	GroupeStageStrategy getGroupeStageStrategy() {
		return strategy;
	}


	/**
	* Play the GroupStage phase, group after group.
	* It displays every step of the GroupStage and show the ranking at the end.
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
		this.getGroupeStageStrategy().addLister(this.matchlistener);
		this.getGroupeStageStrategy().play(this.getCompetitors()) ;
	}

	/*
	 * @return List<Competitor> who are qualified
	 * */
	public List<Competitor> getQualified(){
		return this.getGroupeStageStrategy().getQualified() ;
	}

	/*
	 * add the list of listener
	 * @param matchlistener : the list of listener
	 * */
	public void addListerTab(List<MatchListener> matchlistener) {
		 this.matchlistener=matchlistener;

	}
}
