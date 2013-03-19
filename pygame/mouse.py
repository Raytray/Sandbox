import sys
import pygame
pygame.init()

size = width, height = 800, 600
black = 0, 0, 0

screen = pygame.display.set_mode(size)

trail = pygame.image.load("trail.png")
ball = pygame.image.load("ball.png")
ballrect = ball.get_rect()
mouse_pos = pygame.mouse.get_pos()
ballrect.center = mouse_pos

while 1:
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            sys.exit()

    screen.blit(trail, ballrect)
    mouse_pos = pygame.mouse.get_pos()
    ballrect.center = mouse_pos
    screen.blit(ball, ballrect)
    pygame.display.flip()
