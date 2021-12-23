package jeu ;

import java.util.* ;

 /*
  *  interface for all Group Stage Strategy to take other Strategy if we want
  *  @author Havart Florentin - Bugnon Florentin
  *  @version 3.0
  **/
public interface GroupeStageStrategy {

/*
* methode to play league group
* @param List<Competitor> who play
* */
public void play(List<Competitor> lc) ;

/**
 * return Competitor who are qualified
 * @return List<Competitor> who are qualified
 * */

public List<Competitor> getQualified();
/*
 * return qualified of group
 * @param League for chose qualified
 * */
public void takeQualified(League l);

/*
 * add the list of listener
 * @param matchlistener : the list of listener
 * */
public  void addLister(List<MatchListener> matchlistener);

}
