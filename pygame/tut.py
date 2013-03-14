import sys
import pygame
pygame.init()

size = width, height = 800, 600
speed = [1, 1]
black = 0, 0, 0

screen = pygame.display.set_mode(size)

trail = pygame.image.load("trail.png")
ball = pygame.image.load("ball.png")
ballrect = ball.get_rect()

while 1:
    for event in pygame.event.get():
        if event.type ==pygame.QUIT:
            sys.exit()

    screen.blit(trail, ballrect)
    ballrect = ballrect.move(speed)
    screen.blit(ball, ballrect)
    if ballrect.left < 0 or ballrect.right > width:
        speed[0] = -speed[0]
    if ballrect.top < 0 or ballrect.bottom > height:
        speed[1] = -speed[1]

    pygame.display.flip()
