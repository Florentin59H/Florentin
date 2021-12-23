import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import static org.junit.Assert.*;
import jeu.* ;


public class MatchEventTest {

	private Competitor c1; private Competitor c2;
	private MatchEvent me ;
  @BeforeEach
  public void setUp() throws Exception{
	  c1 = new Competitor("Flo") ; c2 = new Competitor("Max") ;
		me = new MatchEvent(c1,c2) ;
  };

  @Test
  public void initTest(){ 
    assertEquals(c1 , me.getWinner()) ;
	assertEquals(c2, me.getLoser()) ;
  }

}
