package jeu;

import java.util.List;

import util.listSizeException;

/**
	*@author Havart Florentin - Bugnon Florentin
	*@version 3.0
 	*
 	*/
public class MockCompetition extends Competition {


	/**
	 * to "track " method call
	 */
	public int applyCalled =0;

	/**
	 * @param lc the list of Competitors
	 */
	public MockCompetition(List<Competitor> lc) {
		super(lc);

	}

	/**
	 *
	 */
	@Override
	public void play() throws listSizeException {
		if(this.getCompetitors().size() < 2){
			throw new listSizeException("Il faut minimum 2 joueurs") ;
		}
		applyCalled +=1;
	};

}
