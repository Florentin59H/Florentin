package jeu ;
import java.util.* ;

 /**
 *
 * Srategy1 is strategy of groupStage and implement GroupeStageStrategy interface ,
 *  we can chose other strategy , if the class implement this GrpStageStrategy
 *
 *@author Havart Florentin - Bugnon Florentin
 *@version 3.0
  */
public class GSStrategy1 implements GroupeStageStrategy{

  private List<Competitor> qualified;
  private List<MatchListener> matchlistener ;





  /**
   * retunr Compititor who are qualified
   * @return List<Competitor> who are qualified
   * */
  public List<Competitor> getQualified(){
    return this.qualified;
  }

  /*
   * methode to play league group , for this strategy (we create 2 group with halm of competor and after we take half winner of this 2  group and they play  )
   * @param List<Competitor> who play
   * */
  @Override
  public void play(List<Competitor> lc){

    qualified = new ArrayList<Competitor>(lc.size()/2);
    for (int i=0; i<2;i++){
      System.out.println("Group " + (i+1) + " :") ;
      List<Competitor> lc2 = new ArrayList<Competitor>();
      for (int j=i*(lc.size()/2); j<(i+1)*(lc.size()/2);j++){
        lc2.add(lc.get(j));
      }
      League league = new League(lc2) ;
		Iterator<MatchListener> ite = this.matchlistener.iterator();
	    while (ite.hasNext()) {
	    	league.addListener(ite.next());
	    }
      try{
        league.play();
      }
      catch (Exception e) {
        System.out.println("Error size League") ;
      }
      this.takeQualified(league);
      league.displayRanking() ;
    }
  }


  /*
   * return qualified of group
   * @param League for chose qualified
   * */
  public void takeQualified(League l) {

    Set<Competitor> set = l.getCompetitorsMap().keySet();
    int i = 0 ;

    Iterator<Competitor> it = set.iterator() ;
    while(it.hasNext() && i<l.getCompetitors().size()/2){
      i+=1;
      Competitor competitor = it.next();
      this.getQualified().add(competitor);
    }
  }


  /*
	 * add the list of listener
	 * @param matchlistener : the list of listener
	 * */
@Override
public void addLister(List<MatchListener> matchlistener) {
	 this.matchlistener=matchlistener;

}

}
