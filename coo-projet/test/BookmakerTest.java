import static org.junit.jupiter.api.Assertions.*;

import java.util.ArrayList;
import java.util.List;
import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;

import org.junit.*;
import static org.junit.Assert.*;
import jeu.* ;

public class BookmakerTest {

	private Competitor c1; private Competitor c2;
	private List<Competitor> lc ;
	private Bookmaker bm;
	private MatchEvent me;
  @BeforeEach
  public void setUp() throws Exception{
	  c1 = new Competitor("Flo") ; c2 = new Competitor("Max") ;
		lc = new ArrayList<Competitor>() ;
		lc.add(c1) ; lc.add(c2) ;
		bm = new Bookmaker(lc) ;
  };

  @Test
  public void initTest(){
    assertEquals(2, bm.getOddsOfCompetitor(c1)) ;
		assertEquals(2, bm.getOddsOfCompetitor(c2)) ;
		assertTrue(	bm.getOdds().containsKey(c1));
		assertTrue(	bm.getOdds().containsKey(c2));
  }

  @Test
  public void oddsUpTest(){
    bm.oddsUp(c1) ;	bm.oddsUp(c2) ;
    assertEquals(3, bm.getOddsOfCompetitor(c1)) ;
		assertEquals(3, bm.getOddsOfCompetitor(c2)) ;
  }

	@Test
  public void oddsDownTest(){
    bm.oddsDown(c1) ;	bm.oddsDown(c2) ;
		assertEquals(1, bm.getOddsOfCompetitor(c1)) ;
		assertEquals(1, bm.getOddsOfCompetitor(c2)) ;
  }

}
