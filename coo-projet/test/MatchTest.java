import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import static org.junit.Assert.*;
import java.util.*;
import jeu.* ;

class MatchTest {

	private Competitor c1;
	private Competitor c2;
	private Match m1;
	private Journalist journaliste;
	private List<MatchListener> matchlistener;
	 @BeforeEach
	  public void init(){
	    c1 = new Competitor("Flo") ;
	    c2 = new Competitor("Max") ;
	    journaliste = new Journalist("flo");
	    matchlistener = new ArrayList<MatchListener>();
	    matchlistener.add(journaliste);
	    m1 = new Match(matchlistener) ;
	  }

		@Test
	  public void initTest(){
	    assertEquals(m1.getMatchListener(),matchlistener) ;
	  }

	  @Test
	  public void displayWinnerTest(){
	    assertNotNull(m1.playMatch(c1, c2)) ;
	  }

		@Test
	  public void playMatchTest(){
			m1.playMatch(c1, c2) ;
	    assertNotNull(m1.getMatchListener()) ;
	  }
		
		
		@Test
		  public void ListennerTest(){
			assertEquals(m1.getMatchListener(),matchlistener) ;
		  }	
	
}
