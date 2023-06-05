import pygame
import os
import time
import random
pygame.font.init()
WIDTH, HEIGHT = 750, 750
OKNO = pygame.display.set_mode((WIDTH, HEIGHT))
TLO = pygame.transform.scale(pygame.image.load(os.path.join("assets", "background-black.png")), (WIDTH, HEIGHT))
def glowne_menu():
    title_font= pygame.font.SysFont("comicsans",30)
    run=True

    while run:
        OKNO.blit(TLO, (0,0))
        tytul=title_font.render("Naciśnij przycisk myszy aby uruchomić grę ...",1,(255,255,255))
        OKNO.blit(tytul,(WIDTH/2-tytul.get_width()/2,350))
        pygame.display.update()
        for zdarzenie in pygame.event.get():
            if zdarzenie.type == pygame.QUIT:
                run=False
            if zdarzenie.type == pygame.MOUSEBUTTONDOWN:
                print("test")
    pygame.quit()

glowne_menu()
